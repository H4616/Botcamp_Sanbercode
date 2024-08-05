<?php

namespace App\Http\Controllers\Laravel_1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //mengarah ke halaman Register
    public function daftar () {
        return view('Tugas12.Register');
    }

    public function wellcome(Request $request){
        $namaDepan = $request -> input('fname');
        $namaBelakang = $request -> input('lname');

        return view('Tugas12.Wellcome', ['namaDepan' => $namaDepan,'namaBelakang'=> $namaBelakang ]);
    }
}

