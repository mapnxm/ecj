<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
      public function index(){
         return view('index');
      }

     public function login(Request $request){
      //   $request([
      //       'nama'=>'required',
      //       'password'=>'required',
      //       'role'=>'required',
      //   ],[
      //       'nama'=>'nama harus di isi',
      //       'password'=>'nomor induk wajib di isi',
      //       'role'=>'role wajib di isi',
      //   ]);

        $infologin = [
         'nama'      =>$request->nama,
         'password'  =>$request->password,
        ];

      //   dd($infologin);

        if(Auth::attempt($infologin)){
            // dd($infologin);
            if(Auth::user()->role == 'admin'){
                toastr()->success('login berhasil');
               return redirect('/admin');
            }else if(Auth::user()->role == 'mahasiswa'){
                toastr()->success('login berhasil');
               return redirect('/home');
            }
         }else{
            toastr()->error('no induk atau nama tidak terdaftar');
            return redirect('/');
         }
      }

      public function logout(){
         Auth::logout();
         toastr()->success('logout berhasil');
         return redirect('/');
      }
}
