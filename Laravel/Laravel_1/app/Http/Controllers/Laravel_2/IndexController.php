<?php

namespace App\Http\Controllers\Laravel_2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //mengarah pada halaman Tugas13.MasterLayout
    public function masterLayout () {
        return view('Tugas13.Masterlayout');
    }
}
