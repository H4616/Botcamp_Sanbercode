<?php

namespace App\Http\Controllers\Laravel_2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    //mengarah pada hlaman partial_body.Tabel
    public function tabel() {
        return view('Tugas13.partial_body.Tabel');
    }

    //mengarah pada halaman partial_body.dataTable
    public function dataTabel() {
        return view('Tugas13.partial_body.dataTable');
    }
}

