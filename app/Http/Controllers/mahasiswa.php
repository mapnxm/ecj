<?php

namespace App\Http\Controllers;

use App\Models\hasiltugas;
use App\Models\tugas;
use Carbon\Carbon;
use Illuminate\Http\Request;

class mahasiswa extends Controller
{
    public function index(){
        return view('hasil-siswa');
    }

    public function upload(Request $request){
        $file = $request->file('file');
        $audio = $request->file('audio');

        $fileName = $file->getClientOriginalName();
        $fileAudio = $audio->getClientOriginalName();

        $file ->storeAs('document', $fileName);
        $audio ->storeAs('audio', $fileAudio);

        $id = auth()->id();

        $tugas_id = $request->id;

        $user = auth()->user();

        $data = tugas::find($tugas_id);
        $dataH = hasiltugas::where('tugas_id', $tugas_id)->first();

        // dd($semester);
        $date = Carbon::now()->format('d-m-Y');

        if ($dataH == !null) {
            // dd('gagal upload');
            toastr()->error('Anda tidak dapat menumpulkan tugas lagi setelah dinilai.');
            return redirect()->back();
        }else{
            // dd('berhasil upload');
            hasiltugas::create([
                'akun_id'           =>$id,
                'tugas_id'          =>$tugas_id,
                'nama'              =>$user['nama'],
                'nim'               =>$user['nim'],
                'jurusan'           =>$user['jurusan'],
                'semester'          =>$data->semester,
                'topic'             =>$data->topic,
                'dokumen'           =>$fileName,
                'audio'             =>$fileAudio,
                'tgl_pengumpulan'   =>$date,
            ]);
            // dd($request->all());
            toastr()->success('Anda berhasil mengupload data');
            return redirect('/hasil');
        }
    }
}
