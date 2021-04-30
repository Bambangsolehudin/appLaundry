<?php

namespace App\Http\Controllers;

use App\Paket;
use App\Pelanggan;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Transaction::all();
        return view('pages.admin.transaction.index',  compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Pelanggan::all();
        $pakets = Paket::all();
        return view('pages.admin.transaction.create', compact(['items', 'pakets']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jumlahKiloan = $request->jumlah_kiloan;
        $paketId = $request->paket_id;
        $paketHarga = Paket::findOrFail($paketId);
        $paketHarga1 = $paketHarga->harga;

        $total = $jumlahKiloan * $paketHarga1;

        // dd($total);

        $data = $request->all();
        $data['total'] = $total;

        Transaction::create($data);

        return redirect()->route('transaction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::find($id);
        $paket = $transaction->paket->nama;
        // dd($transaction);
        return view('pages.admin.transaction.show', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaction = Transaction::find($id);
        $a = $transaction->paket->id;
        $b =  $transaction->paket->nama;
        // dd($b);
        $pakets = Paket::all();
        $pelanggan = Pelanggan::all();
        return view('pages.admin.transaction.edit', compact(['transaction', 'pakets', 'pelanggan', 'a', 'b']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jumlahKiloan = $request->jumlah_kiloan;
        $paketId = $request->paket_id;
        $paketHarga = Paket::findOrFail($paketId);
        $paketHarga1 = $paketHarga->harga;

        $total = $jumlahKiloan * $paketHarga1;

        $data = $request->all();
        $data['total'] = $total;
        $transaction = Transaction::find($id);
        $transaction->update($data);
        return redirect()->route('transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();
        return redirect()->route('transaction.index');
    }
}
