<?php

namespace App\Http\Controllers\Laravel_1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
        //mengarah Ke Halaman Home
        public function index () {
        return view('Tugas12.Home');
    }
    
}
