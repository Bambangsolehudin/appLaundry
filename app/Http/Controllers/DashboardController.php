<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use App\Paket;
use App\Transaction;
use App\Transaction_out;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $transaction = Transaction::count();
        $paket = Paket::count();
        $pelanggan = Pelanggan::count();
        $pengeluaran = Transaction_out::count();
        return view('pages.admin.dashboard', compact('transaction', 'paket', 'pelanggan', 'pengeluaran'));
    }
}
