@extends('layouts.admin')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">post</h1>
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
                    <h5 class="text-center"><i class="fas fa-plus"></i>Tambah post</h5 class="text-center">
                    <form method="POST" action="{{ route('post.store') }}">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputtext1" class="form-label">title</label>
                          <input type="text" name="title" class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
                        </div>
    
                        <div class="mb-3">
                            <label for="post" class="form-label">post</label>
                            <textarea class="form-control" name="post" id="post" cols="40" rows="10"></textarea>
                        </div>
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>

              
               










        



            </div>



        </div>
        <!-- /.container-fluid -->
@endsection
