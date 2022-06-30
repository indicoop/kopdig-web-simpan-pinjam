<?php

namespace App\Http\Controllers;

use App\Models\Cooperative;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnValue;

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
                            // dd($countCooperative);

        return view('pages.simpan-pinjam.detail', compact('cooperativeId', 'countCooperative'));
    }
    
    public function pinjaman()
    {
        return view('pages.simpan-pinjam.pinjaman.index');
    }

    public function pinjamanCreate()
    {
        return view('pages.simpan-pinjam.pinjaman.create');
    }

}
