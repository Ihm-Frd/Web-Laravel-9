<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ciantra-Register</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('assets/img/ciantra.png') }}">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{ URL::to('assets/vendor/fontawesome-free/css/all.min.css') }}"  type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ URL::to('assets/css/sb-admin-2.min.css') }}" >
    <link rel="stylesheet" href="{{ URL::to('assets/css/home.css') }}" >

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body class="bg-gradient-warning">

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-gradient-warning shadow-lg fixed-top">
            <div class="container justify-content-center">
              <a class="navbar-brand ml-auto" href="{{ route('home') }}"
                ><b> Desa<span><i>Ciantra.com </i></span></b></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" style="text-align: center">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}"><b>HOME <i class="bi bi-houses-fill"></i></b></a>
                      </li>
                    <li class="nav-item" style="text-align: center">
                        <a class="nav-link active" aria-current="page" href="{{ route('login') }}"><b>Login <i class="bi bi-door-open-fill"></i> </b></a>
                      </li>
                  <br>
                </ul>
              </div>
            </div>
          </nav>


        <div class="card o-hidden border-0 shadow-lg mt-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row mt-5">
                    <div class="col-lg-5 d-none d-lg-block mt-3">
                        <img src="{{ URL::to('assets/img/ciantra.png') }}" alt="Desa Ciantra">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <img src="{{ URL::to('assets/img/ciantra.png') }}" alt="Bootstrap" width="35" height="35">
                                       
                                <h1 class="h4 text-gray-900 mb-4 mt-1"><i class="bi bi-pencil-fill"></i> Buat Akun Anda!</h1>
                            </div>
                            <form action="{{ route('register.simpan') }}" method="POST" class="user">
                                @csrf
                                
                                <div class="form-group">
                                    <input name="nama" type="text" class="form-control form-control-user" id="exampleInputName"
                                      @error('nama')is-invalid @enderror  placeholder="Nama Anda">
                                      @error('nama')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                      @enderror
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    @error('email')is-invalid @enderror placeholder="Email Address">
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="password" type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" @error('password')is-invalid @enderror placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="password_confirmation" type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" @error('password_confirmation')is-invalid @enderror placeholder="Repeat Password">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                          @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Registrasikan Akun</button>
                               <hr>
                                <a href="{{ route('login') }}" type="submit" class="btn btn-facebook btn-user btn-block">Login Sekarang!</a>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::to(' assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::to(' assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ URL::to(' assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ URL::to(' assets/js/sb-admin-2.min.js') }}"></script>

</body>

</html>