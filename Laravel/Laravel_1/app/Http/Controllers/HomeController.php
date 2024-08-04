<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    //mengarah Ke Halaman Home
    public function index () {
    return view('Home');
}
}
