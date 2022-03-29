<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TransaksiHeader;

class LaporanController extends Controller
{
    //index transaksi
    public function index()
    {
        $trk = TransaksiHeader::all();
        return view('laporan.index', compact('trk'));
    }
}
