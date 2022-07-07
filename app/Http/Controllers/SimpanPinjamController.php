<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanRequest;
use App\Models\Cooperative;
use App\Models\Loan;
use Illuminate\Http\Request;
use App\Models\User;
Use Alert;

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
        $users = User::where('role_id', 2)->get();
        $cooperatives = Cooperative::where('form_of_cooperative', 'Koperasi Simpan Pinjam')->get();
        return view('pages.simpan-pinjam.pinjaman.create', compact('users', 'cooperatives'));
    }

    public function pinjamanStore(LoanRequest $request)
    {

        $attr = $request->all();
        $attr['installment_code'] = bin2hex(random_bytes(3));

        Loan::create($attr);
        Alert::success('Berhasil', 'Data berhasil ditambahkan');

        return redirect()
                    ->route('simpan-pinjam.pinjaman.index');

    }

    public function PinjamanShow($id)
    {
        $getLoanById = Loan::findOrFail($id);
        return view('pages.simpan-pinjam.pinjaman.show', compact('getLoanById'));
    }

}
