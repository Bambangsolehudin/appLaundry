@extends('layouts.admin')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Jenis Paket</h1>
          </div>

          <!-- Content Row -->
          <div class="row justify-content-center">
              

                <div class="col-8">
                    <h5 class="text-center"><i class="fas fa-plus"></i>Edit paket</h5 class="text-center">
                    <form method="POST" action="{{ route('paket.update', $item->id) }}">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" value="{{ $item->nama }}" name="nama" class="form-control" id="nama">
                        </div>
    
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" value="{{ $item->harga }}" name="harga" class="form-control" id="harga">
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                </div>

              
               










        



            </div>



        </div>
        <!-- /.container-fluid -->
@endsection
