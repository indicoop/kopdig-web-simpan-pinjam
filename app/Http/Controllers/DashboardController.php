<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('pages.admin.index');
    }

    public function ketua()
    {
        return view('pages.ketua.index');
    }

    public function sekretaris()
    {
       return view('pages.sekretaris.index');

    }

    public function bendahara()
    {
       return view('pages.bendahara.index');

    }

    public function anggota()
    {
      return view('pages.anggota.index');

    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function editprofile()
    {
        return view('pages.editprofile');
    }
}
