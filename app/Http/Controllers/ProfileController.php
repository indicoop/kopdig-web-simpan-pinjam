<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('auth.profile.index');
    }
     public function edit()
    {
        return view('auth.profile.edit');
    }
}
