<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenorController extends Controller
{
    public function index()
    {
        return view('pages.simpan-pinjam.tenor.index');
    }
}
