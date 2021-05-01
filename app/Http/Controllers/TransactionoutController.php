<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Transaction_out;
use Illuminate\Http\Request;
use PDF;

class TransactionoutController extends Controller
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
        $items = Transaction_out::all();
        $transactions = Transaction::all();
        $totalTransaction = $transactions->sum('total');
        $jmlTransaction = $transactions->count();


        $total = $items->sum('nominal');
        $jml = $items->count();
        // dd($jmlTransaction);
        return view('pages.admin.transaction-out.index', compact('items', 'total', 'jml', 'transactions', 'totalTransaction', 'jmlTransaction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.transaction-out.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Transaction_out::create($data);

        return redirect()->route('transaction-out.index')->with('status', 'data transaksi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Transaction_out::find($id);
        return view('pages.admin.transaction-out.edit', compact('item'));
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
        $data = $request->all();
        $transaction = Transaction_out::find($id);

        $transaction->update($data);
        return redirect()->route('transaction-out.index')->with('status', 'data transaksi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = Transaction_out::find($id);
        $transaction->delete();
        return redirect()->route('transaction-out.index')->with('status', 'data transaksi berhasil dihapus');
    }

    public function generatePDF()
    {
        $transactions = Transaction_out::all();
        $totalTransaction = $transactions->sum('total');
        $jmlTransaction = $transactions->count();


        $total = $transactions->sum('nominal');
        $jml = $transactions->count();
        $pdf = PDF::loadView('pages.print.transaction-out', compact(
            'transactions',
            'jml',
            'total',
            'jmlTransaction',
            'totalTransaction'
        ));
        $a = "To-" . mt_rand(10, 99);
        return $pdf->download($a . '.pdf');
    }
}
