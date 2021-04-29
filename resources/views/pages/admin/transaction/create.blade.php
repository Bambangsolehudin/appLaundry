@extends('layouts.admin')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">transaction</h1>
          </div>

          @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
          <!-- Content Row -->
          <div class="row justify-content-center">
              

                <div class="col-8">
                    <h5 class="text-center"><i class="fas fa-plus"></i>Tambah transaction</h5 class="text-center">
                    <form method="POST" action="{{ route('transaction.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="title">Nama Pelanggan</label>
                            <select name="pelanggan_id" required class="form-control">
                                <option value="">Pilih Nama</option>
                                @foreach($items as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="title">Paket Laundry</label>
                            <select name="paket_id" id="paket_id" required class="form-control">
                                <option value="">Pilih Paket Laundry</option>
                                @foreach($pakets as $paket)
                                    <option value="{{ $paket->id }}">
                                        {{ $paket->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
    
                        <div class="mb-3">
                            <label for="kode_transaction" class="form-label">Kode Transaksi</label>
                            <input type="text" name="kode" readonly value="T- @php echo date("mdY").mt_rand(10, 99)  @endphp" class="form-control" id="nama">
                        </div>
    
                        <div class="mb-3">
                            <label for="tanggal_terima" class="form-label">Tanggal Terima</label>
                            <input type="date" name="tanggal_terima" class="form-control" id="tanggal_terima">
                        </div>
    
                        <div class="mb-3">
                            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                            <input type="date" name="tanggal_selesai" class="form-control" id="tanggal_selesai">
                        </div>


                        <div class="mb-3">
                            <label for="jumlah_kiloan" class="form-label">Jumlah (Kg)</label>
                            <input type="number" name="jumlah_kiloan" class="form-control" id="jumlah_kiloan">
                        </div>

                        <div class="mb-3">
                            {{-- <label for="total"  class="form-label">Total</label> --}}
                            <input type="hidden" id="total" name="total" value="0" class="form-control" id="total">
                        </div>

                        <div class="mb-3">
                            <div class="form-group">
                                <label for="title">Status</label>
                                <select name="status" required class="form-control">
                                    <option value="">Pilih Status</option>
                                        <option value="Lunas">
                                            Lunas
                                        </option>
                                        <option value="belum bayar">
                                            Belum bayar
                                        </option>
                                </select>
                            </div>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>

              
               










        



            </div>



        </div>
        <!-- /.container-fluid -->
@endsection
