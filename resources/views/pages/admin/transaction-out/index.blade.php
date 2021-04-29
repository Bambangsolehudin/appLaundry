@extends('layouts.admin')

@section('content')

        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Semua Transaksi </h1>
          </div>
         
          <div class="row">
            <div class="col-7">
                <div class="card text-white bg-info mb-3">
                <div class="card-header text-white bg-info">Pengeluaran</div>
                <div class="card-body">
                <a href="{{ route('transaction-out.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                <table class="table table-bordered text-white" id="pelanggan"  width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nominal</th>
                            <th>Catatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $items as $item )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ date('d F Y', strtotime( $item->tanggal)) }}</td>
                            <td>{{ $item->nominal }}</td>
                            <td>{{ $item->catatan }}</td>                       
                            <td>
                                <a href="{{ route('transaction-out.edit', $item->id) }}" class="badge bg-warning text-dark"> <i class="fas fa-edit"></i></a>
                                <form method="post" action="{{ route('transaction-out.destroy', $item->id) }}" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="badge bg-danger text-white"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="5">Data tidak ada</td>
                        @endforelse
                
                    </tbody>
                </table>
                <hr>
                {{-- <p>jumlah data : {{ $jml }}</p> --}}
                <p class="text-bold">Total Pengeluaran : <span class="text-dark">{{ $total }}</span> 
                dari 
                    
                <span class="text-warning">{{ $jml }} </span> data</p>
                    </div>
                    </div>
            </div>
              
            <div class="col-5 mt-5">
                <div class="card mb-3">
                    <div class="card-header">Pemasukan</div>
                    {{-- <a href="{{ route('transaction-out.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a> --}}
                    <div class="card-body">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $transactions as $transaction )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $transaction->kode }}</td>
                                <td>{{ $transaction->total }}</td>
                            </tr>
                            @empty
                                <td colspan="5">Data tidak ada</td>
                            @endforelse
                    
                        </tbody>
                    </table>
                    {{-- <p>jumlah data : {{ $jml }}</p> --}}
                    <p class="text-bold">Total Pemasukan : <span class="text-primary">{{ $totalTransaction }}</span> 
                    dari 
                        
                    <span class="text-warning">{{ $jml }} </span> data</p>
                    </div>
                </div>
            </div>
          </div>
        
        </div>
        
@endsection
