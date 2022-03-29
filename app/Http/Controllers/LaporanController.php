<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiHeader;
use App\Models\User;

class LaporanController extends Controller
{
    //index transaksi
    public function index()
    {
        $trx = TransaksiHeader::all();
        return view('laporan.index', compact('trx'));
    }
}
