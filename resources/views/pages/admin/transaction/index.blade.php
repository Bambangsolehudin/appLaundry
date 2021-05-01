@extends('layouts.admin')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
        
          </div>

          <!-- Content Row -->
          <div class="row justify-content-center">
       

            <!-- Earnings (Monthly) Card Example -->
            {{-- <div class="col-xl-3 col-md-6 mb-4"> --}}
              
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark text-center">Data Transaksi</h6>
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                    
                        <!-- Button trigger modal -->
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                        </button> --}}
  

                 
                    </div>
                    <div class="card-body">
                     
                        <div class="table-responsive">
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></a>
                            <a href="{{ route('print-transaction')}}" class="btn btn-warning btn-sm" target="_blank"> <i class="fas fa-print"></i></a>

                            <table class="table table-bordered" id="transaction" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        {{-- <th>Pelanggan</th>
                                        <th>Paket</th> --}}
                                        <th>Kode Transaction</th>
                                        {{-- <th>Tanggal Terima</th>
                                        <th>Tanggal selesai</th> --}}
                                        <th>jumlah(kg)</th>
                                        {{-- <th>Total</th> --}}
                                        <th>status</th>
                                        <th>Aksi</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ( $items as $item )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        {{-- <td>{{ $item->pelanggan->nama }}</td> --}}
                                        {{-- <td>{{ $item->paket->nama }}</td> --}}
                                        <td><a href="{{ route('transaction.show', $item->id) }}">{{ $item->kode }}</a> </td>
                                        {{-- <td>{{ date('d F Y', strtotime( $item->tanggal_terima)) }}</td>
                                        <td>{{ date('d F Y', strtotime( $item->tanggal_selesai)) }}</td> --}}
                                        <td>{{ $item->jumlah_kiloan }}</td>
                                        {{-- <td>{{ $item->total }}</td> --}}
                                        <td>{{ $item->status }}</td>
                                        
                                        <td>
                                            <a href="{{ route('transaction.edit', $item->id) }}"  id="transaction12" class="badge bg-warning text-dark"> <i class="fas fa-edit"></i></a>
                                            <form method="post" action="{{ route('transaction.destroy', $item->id) }}" class="d-inline">
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
                        </div>
                    </div>
                </div>



            </div>
          {{-- </div> --}}


          {{-- @include('pages.admin.transaction.show') --}}
        </div>
    


        {{-- @if(isset($_GET['hello'])) --}}
        {{-- @endif --}}
@endsection
