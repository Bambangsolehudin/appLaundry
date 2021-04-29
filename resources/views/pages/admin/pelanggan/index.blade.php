@extends('layouts.admin')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pelanggan</h1>
          </div>

          <!-- Content Row -->
          <div class="row justify-content-center">

            <!-- Earnings (Monthly) Card Example -->
            {{-- <div class="col-xl-3 col-md-6 mb-4"> --}}
              
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
                 
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="table-responsive">
                            <a href="{{ route('pelanggan.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                            <table class="table table-bordered" id="pelanggan" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Nomor Telepon</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ( $items as $item )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nomor_telepon }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>
                                            <a href="{{ route('pelanggan.edit', $item->id) }}" class="badge bg-warning text-dark"> <i class="fas fa-edit"></i></a>
                                            <form method="post" action="{{ route('pelanggan.destroy', $item->id) }}" class="d-inline">
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



        </div>
        <!-- /.container-fluid -->
@endsection
