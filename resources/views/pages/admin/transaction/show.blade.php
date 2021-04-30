@extends('layouts.admin')

@section('content')
        <div class="container-fluid mb-3">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Transaksi</h1>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header text-primary text-center">
                  Detail Transaksi
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">kode : {{ $transaction->kode }}</li>
                  <li class="list-group-item">paket : {{ $transaction->paket->nama }}</li>
                  <li class="list-group-item"> pelanggan : {{ $transaction->pelanggan->nama }}</li>
                  <li class="list-group-item"> tanggal terima : {{ date('d F Y', strtotime( $transaction->tanggal_terima)) }}</li>
                  <li class="list-group-item"> tanggal selesai : {{ date('d F Y', strtotime( $transaction->tanggal_selesai)) }}</li>
                  <li class="list-group-item"> jumlah (kg) : {{ $transaction->jumlah_kiloan }}</li>
                  <li class="list-group-item"> total : Rp. {{ $transaction->total }}</li>
                  <li class="list-group-item"> status : {{ $transaction->status }}</li>
                </ul>
              </div>
            </div>
            </div>                    
          </div>
@endsection
