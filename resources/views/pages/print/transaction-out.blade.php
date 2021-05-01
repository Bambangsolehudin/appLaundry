<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
        <div class="row justify-content-center">

        <div class="text-lg text-center">
            app<span class="text-primary  ">
            <span class="text-uppercase">L</span>aundry</span></div>
        {{-- <p>Bogor, Jl Selakosa barat-4026</p> --}}
        <hr>
        {{-- <br> --}}
        <p>Data Transaksi - Pengeluaran</p>
   
                  <div class="table-responsive">
                      <table class="table table-bordered" id="transaction" width="100%" cellspacing="0">
                          <thead>
                              <tr class="text-center">
                                  <th>No</th>
                                  <th>Tanggal</th>
                                  <th>nominal</th>
                                  <th>catatan</th>
                              </tr>
                          </thead>
                          <tbody>
                              @forelse ( $transactions as $transaction )
                              <tr class="text-center">
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ date('d F Y', strtotime( $transaction->tanggal)) }}</td>
                                  <td>{{ $transaction->nominal }}</td>
                                  <td>{{ $transaction->catatan }}</td>
                              </tr>
                              @empty
                                  <td colspan="5">Data tidak ada</td>
                              @endforelse
                          </tbody>
                      </table>
                      <p class="text-bold">Total Pengeluaran : <span class="text-info"> 
                        {{ "Rp " . number_format($total, 2, ",", ".") }}
                        </span> 
                        dari 
                            
                        <span class="text-warning">{{ $jml }} </span> data</p>
                  </div>
              </div>
      
  </div>
</body>
</html>