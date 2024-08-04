<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class AuthController extends Controller
{
    //mengarah ke halaman Register
    public function daftar () {
        return view('Register');
    }

    public function wellcome(Request $request){
        $namaDepan = $request -> input('fname');
        $namaBelakang = $request -> input('lname');

        return view('Wellcome', ['namaDepan' => $namaDepan,'namaBelakang'=> $namaBelakang ]);
    }
}
