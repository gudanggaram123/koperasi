<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('nasabah/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('nasabah/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('nasabah/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('nasabah/css/landing-page.min.css') }}" rel="stylesheet">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>

    <!-- Navigation -->
    @include('nasabah.layouts.navbar')

    <!-- Masthead -->
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Cek Data Nasabah!</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form method="POST" action="{{ route('data_nasabah')}}" >
                        {{csrf_field()}}

                        <div class="form-row">
                            <div class="col-12 col-md-12 mb-2 mb-md-1">
                                <input type="text" name="nama" class="form-control form-control-lg"
                                    placeholder="Enter your email...">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-1">
                                <input type="password" name="password" class="form-control form-control-lg"
                                    placeholder="Enter your password...">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-1">
                                <button type="submit" class="btn btn-block btn-lg btn-primary">Cek!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Icons Grid -->
    @if(isset($nasabah))
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        @include('nasabah.layouts.collapse')
                </div>
            </div>
        </div>
    </section>
    @endif
        
    <!-- Footer -->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item">
                            <a href="#">About</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Contact</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2020. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fab fa-facebook fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-instagram fa-2x fa-fw"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('nasabah/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('nasabah/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>