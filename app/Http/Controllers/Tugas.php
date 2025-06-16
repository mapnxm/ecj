<?php

namespace App\Http\Controllers;

use App\Models\hasiltugas;
use App\Models\tugas as ModelsTugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tugas extends Controller
{
    public function isiTgs($id){
        $data = ModelsTugas::where('topic_id',$id)->get();
        $tugas = hasiltugas::all();
        return view('upload', compact(['data']));
    }
    public function hapustgs($id) {
        DB::table('hasiltgs')->where('id', $id)->delete();
        toastr()->success('berhasil menghapus tugas');
        return redirect()->back();
    }
}
