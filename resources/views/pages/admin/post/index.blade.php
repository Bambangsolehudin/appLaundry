@extends('layouts.admin')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">post</h1>
          </div>

          <!-- Content Row -->
          <div class="row justify-content-center">

              <div class="col-8">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-dark text-center">Data post</h6>
                 
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="table-responsive">
                            <a href="{{ route('post.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                            <table class="table table-bordered" id="pelanggan" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>title</th>
                                        <th>post</th>  
                                        <th>pengirim</th> 
                                        <th>Aksi</th>                                 
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ( $items as $item )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->post }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>
                                            <a href="{{ route('post.edit', $item->id) }}" class="badge bg-warning text-dark"> <i class="fas fa-edit"></i></a>
                                            <form method="post" action="{{ route('post.destroy', $item->id) }}" class="d-inline">
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
                



          {{-- </div> --}}



        </div>
        <!-- /.container-fluid -->
@endsection
