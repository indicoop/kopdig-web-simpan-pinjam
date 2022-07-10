<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanRequest;
use App\Models\{Cooperative, Installment, User, Loan};
use Illuminate\Http\Request;
Use Alert;

class SimpanPinjamController extends Controller
{

    private $loan;

    public function __construct(Loan $loan)
    {
        $this->loan = $loan;
    }

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

        $loan = Loan::create($attr);
        $loanId = $loan->id;

        $installment  = [
            'loan_id' => $loanId,
            'pay_date' => now(),
            'installment_amount' => $request->big_loan,
            'installment_to' => 0,
            'total_installment' => $request->big_loan,
            'remaining_installments' => $request->big_loan
        ];

        Installment::create($installment);

        Alert::success('Berhasil', 'Data berhasil ditambahkan');

        return redirect()
                    ->route('simpan-pinjam.pinjaman.index');

    }

    public function PinjamanShow($id)
    {
        $getLoanById = Loan::findOrFail($id);
        $getAllInstallmentById = Installment::all();
        return view('pages.simpan-pinjam.pinjaman.show', compact('getLoanById', 'getAllInstallmentById'));
    }

    public function Angsuran(Request $request)
    {
        $attr = $request->all();

        Installment::create($attr);

        return back();
    }

}
