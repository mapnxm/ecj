<?php

namespace App\Http\Controllers;

use App\Models\hasiltugas;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin extends Controller
{
    public function list(){
        return view('admin-mahasiswa');
    }

    public function admin(){
        return view('admin-home');
    }

    public function store(Request $request){
        $date = Carbon::now()->format('Y-m-d');
        $pass = $request->nim;
        DB::table('users')->insert([
            'email'     =>$request->email,
            'nama'      =>$request->nama,
            'nim'       =>$pass,
            'jurusan'   =>$request->jurusan,
            'password'  =>bcrypt($pass),
            'role'      =>$request->role,
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        toastr()->success('Anda berhasil menginput mahasiswa');
        return redirect('/list-mahasiswa');
    }

    public function nilai(Request $request){
        $data = hasiltugas::find($request->id);
        // dd($data);
        $data->nilai = $request->nilai;
        $data->save();
        DB::commit();
        toastr()->success('nilai berhasil terupload');
        return redirect('/admin');
    }

    public function downloadD($id){
        $file = hasiltugas::find($id);
        if(!$file){
            return abort(404);
        }
        $fileD = storage_path("app/document/{$file->dokumen}");
        $downFileD = $file->dokumen;

        return response()->download($fileD,$downFileD);
        // return response()->download($fileD,$file->dokumen);
    }
    public function downloadA($id){
        $file = hasiltugas::find($id);
        if(!$file){
            return abort(404);
        }
        $fileA = storage_path("app/audio/{$file->audio}");
        return response()->download($fileA,$file->audio);
    }
    public function hapustgs($id){
        DB::table('hasiltgs')->where('id',$id)->update([
            'is_delete' => true,
        ]);
        toastr()->success('Anda berhasil menghapus tugas mahasiswa');
        return redirect('/admin');
    }
    public function hapusakun($id){
        DB::table('users')->where('id',$id)->delete();
        toastr()->success('Anda berhasil menghapus akun mahasiswa');
        return redirect('/list-mahasiswa');
    }
    public function edit(Request $request){
        $date = Carbon::now()->format('Y-m-d');
        $pass = $request->nim;
        DB::table('users')->where('id', $request->id)->update([
            'email'     =>$request->email,
            'nama'      =>$request->nama,
            'nim'       =>$pass,
            'jurusan'   =>$request->jurusan,
            'password'  =>bcrypt($pass),
            'role'      =>$request->role,
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        toastr()->success('Anda berhasil mengupdate data mahasiswa');
        return redirect('/list-mahasiswa');

    }
    public function update($id){
        $siswa = user::find($id);
        return view ('edit', compact (['siswa']));
    }
}
