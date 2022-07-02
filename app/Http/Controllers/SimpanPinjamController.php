<?php

namespace App\Http\Controllers;

use App\Models\Cooperative;
use Illuminate\Http\Request;
use App\Models\User;

class SimpanPinjamController extends Controller
{
    public function index()
    {
        return view('pages.simpan-pinjam.index');
    }

    public function show($id)
    {

        $cooperativeId = Cooperative::findOrFail($id);
        $countCooperative = Cooperative::where('form_of_cooperative', $cooperativeId->form_of_cooperative)
                            ->count();

        return view('pages.simpan-pinjam.detail', compact('cooperativeId', 'countCooperative'));
    }

    public function pinjaman()
    {
        return view('pages.simpan-pinjam.pinjaman.index');
    }

    public function pinjamanCreate()
    {
        $users = User::where('role_id', 4)->get();
        $cooperatives = Cooperative::where('form_of_cooperative', 'Koperasi Simpan Pinjam')->get();
        return view('pages.simpan-pinjam.pinjaman.create', compact('users', 'cooperatives'));
    }

}
