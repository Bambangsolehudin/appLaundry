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
              

                <div class="col-8">
                    <h5 class="text-center"><i class="fas fa-plus"></i>Edit Pelanggan</h5 class="text-center">
                    <form method="POST" action="{{ route('pelanggan.update', $item->id) }}">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                          <label for="exampleInputtext1" class="form-label">Kode</label>
                          <input type="text" name="kode" value="{{ $item->kode }}" readonly class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
                        </div>
    
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" value="{{ $item->nama }}" name="nama" class="form-control" id="nama">
                        </div>
    
                        <div class="mb-3">
                            <label for="alamat" class="form-label">alamat</label>
                            <input type="text" value="{{ $item->alamat }}" name="alamat" class="form-control" id="alamat">
                        </div>
    
                        <div class="mb-3">
                            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" value="{{ $item->nomor_telepon }}" name="nomor_telepon" class="form-control" id="nomor_telepon">
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                </div>

              
               










        



            </div>



        </div>
        <!-- /.container-fluid -->
@endsection
