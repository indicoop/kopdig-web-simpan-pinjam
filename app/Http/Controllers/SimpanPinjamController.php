<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpanPinjamController extends Controller
{
    public function index()
    {
        return view('pages.simpan-pinjam.index');
    }
}
