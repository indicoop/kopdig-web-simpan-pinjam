<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id'           => 'required',
            'cooperative_id'    => 'required',
            'position'          => 'required',
            'nik'               => 'required',
            'type_of_work'      => 'required',
            'big_loan'          => 'required',
            'monthly_income'    => 'required',
            'interest_per_year' => 'required',
            'time_period'       => 'required',
            'installment'       => 'required'
        ];

    }

    public function messages()
    {
        return [
            'user_id.required'                      => 'Nama Peminjam tidak boleh kosong',
            'cooperative_id.required'               => 'Silahkan pilih koperasi',
            'nik.required'                          => 'NIK wajib diisi',
            'position.required'                     => 'Jabatan tidak boleh kosong',
            'type_of_work.required'                 => 'Jenis Pekerjaan tidak boleh kosong',
            'monthly_income.required'               => 'Silahkan isi pendapatan anda perbulan',
            'big_loan.required'                     => 'Masukan nominal pinjaman anda',
            'time_period.required'                  => 'Pilih jangka waktu pinjaman anda'
        ];
    }
}
