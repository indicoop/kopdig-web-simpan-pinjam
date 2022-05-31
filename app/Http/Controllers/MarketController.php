<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function market()
    {
        return view('pages.market.index');
    }


    public function barang()
    {
        return view('pages.market.barang.index');
    }

    public function detailBarang(){
        return view('pages.market.barang.detail');
    }

    public function notifikasi()
    {
        return view('pages.market.notifikasi');
    }

    public function checkout()
    {
        return view('pages.market.checkout');
    }

    public function transaction()
    {
        return view('pages.market.transaction');
    }
}
