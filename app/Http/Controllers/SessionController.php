<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        return view('sesi.index');
    }
    public function login (Request $request){
        Session::flash('email',$request->email);

        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ],[
            'email' => 'required',
            'password' => 'required'
        ]);
        [
            'email' => 'email wajib diisi',
            'password' => 'password wajib diisi'
        ];

        $infoLogin =[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if(Auth::attempt($infoLogin)){
            return redirect('departemen')->with('success','Login Berhasil');
        }else{
            return redirect('sesi')->with('success','Login Gagal Cek Email dan Password Anda !');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('sesi')->with('success','Anda Berhasil Logout');
    }
}

