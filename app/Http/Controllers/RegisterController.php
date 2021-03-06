<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(){
    	return view('form');
    }

    public function sapa(){
    	return view('welcome');
    }

    public function sapa_post(Request $request){

    	$nama_depan = $request["nama_depan"];
    	$nama_belakang = $request["nama_belakang"];
    	return view('welcome', ['nama_depan'=>$nama_depan, 'nama_belakang'=>$nama_belakang]);
    }
}
