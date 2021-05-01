<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    
    <title>appLaundry</title>
    <!-- my css -->
    <link rel="stylesheet" href="{{ url('front/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  </head>
  <body>
    <!-- Navbar -->

      <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
          
          <img src="{{ url('front/img/icon.png') }}">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
              <a class="nav-link" href="#">Lowongan</a>
              <a class="nav-link" href="#">Features</a>
              <a class="nav-link" href="#">About</a>
              <a class="btn btn-primary tombol" href="login.html">Join us</a>
              
            </div>
          </div>
      </div>
      </nav>
    
    <!-- End Navbar -->
<!--  -->

    <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Melayani dengan <span> cepat </span> <br> dan <span>dengan</span> Sepenuh hati</h1>
      {{-- <a href="login.html" class="btn btn-primary tombol"> Get work</a> --}}
    </div>
   
  </div>
    <!-- end jombotron -->

  <!-- container -->
    <div class="container">
      <!-- info panel -->
      <div class="row justify-content-center">
        <div class=" col-10 info-panel">
          <div class="row">
            
              <div class="col-lg">
                <img src="{{ url('front/img/employee.png') }}" alt="Employee" class="float-left">
                <h4>24 Hours</h4>
                <p>Lorem ipsum dolor sit amet</p>
              </div>
              <div class="col-lg">
                <img src="{{ url('front/img/hires.png') }}" alt="High res" class="float-left"> 
                <h4>24 Hours</h4>
                <p>Lorem ipsum dolor sit amet</p>
              </div>
              <div class="col-lg">
                <img src="{{ url('front/img/security.png') }}" alt="Security" class="float-left">
                <h4>24 Hours</h4>
                <p>Lorem ipsum dolor sit amet</p>
              </div>
            
          </div>


        </div>
      </div>

      <!-- end info panel -->

    
        





  <!-- portfolio -->
  <section class="portfolio mt-4" id="portfolio" style="margin-top: -31px; font-family: 'Playfair Display', serif;">
      <div class="container">
        <div class="row pt-4 mb-4 mt-4">
          <div class="col text-center">
            <h2 class="mb-4 mt-4"><span style="font-family: arial; margin-top: 100px;" >Daftar</span> <span style="font-weight: bold;">Lowongan</span></h2>
          </div>
        </div>

        <div class="row ">
            @foreach ($post as $p)

            <div class="col-md-4 mb-4">
                <div class="card portfolio1">
                  <img class="card-img-top" src="{{ url('front/img/kerja.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-text text-center">{{ $p->title }}</h4>
                    <p>{{ $p->post }}</p>
                  </div>
                </div>
            </div>
          
            @endforeach


        </div>
     </div>
    </section>

  <!-- end portfolio -->









<!-- contact -->
 <section class="contact mt-5" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>Contact Us</h2>
        <hr>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-2 col-sm-10">
        
      </div>
      <div class="col-md-4 mt-5">
        <div class="card bg-dark portfolio2" style="width: 20rem;">
          
          <div class="card-body text-white ">
            <h5 class="card-title text-center"><i class="fas fa-address-card"></i> </h5>
            <h5 class="card-title text-center"> Contact </h5>
            <p class="card-text text-center"> Hubungi kami di :</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item ">appLaundry@gmail.com</li>
            <li class="list-group-item">62-8716189201</li>
            {{-- <li class="list-group-item">Web Development</li>
            <li class="list-group-item">Android Developer</li> --}}

          </ul>
        </div>
      </div>
      <div class="col-lg-5 col-sm-10">
        <form>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" class="form-control" placeholder="masukan Nama">           
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control" placeholder="masukan Email">
          </div>
          <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="tel" id="telepon" class="form-control" placeholder="masukan Nomor Telepon">
          </div>
          {{-- <div class="form-group">
          <select class="form-control">
            <option>-- Pilih Kategory --</option>
            <option>Web Design</option>
            <option>Web Developer</option>
          </select>
          </div> --}}
          <label for="pesan">Pesan</label>
          <div class="form">
          <textarea class="form-control" rows="5" placeholder="masukan pesan">
            
          </textarea>
          </div>

          <button type="submit" class="btn btn-primary">Kirim Pesan</button>


  
        </form>
      </div>
    </div>
  </div>
  </section>
<!-- end contact -->

<!-- footer -->

<div class="row footer">
  <div class="col text-center">
    <p>2021 appLaundry </p>
  </div>
</div>

<!-- end footer -->


    </div>
  <!-- end Container -->

    
























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>