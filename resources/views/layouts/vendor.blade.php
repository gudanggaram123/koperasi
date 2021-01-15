<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from templatecycle.com/demo/bootclassified-4.4/dist/property-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Dec 2018 13:41:14 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{ asset('html/assets/ico/apple-touch-icon-144-precomposed.png') }}') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{ asset('html/assets/ico/apple-touch-icon-114-precomposed.png') }}') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{ asset('html/assets/ico/apple-touch-icon-72-precomposed.png') }}') }}">
    <link rel="apple-touch-icon-precomposed"
          href="{{ asset('html/assets/ico/apple-touch-icon-57-precomposed.png') }}') }}">
    <link rel="shortcut icon" href="{{ asset('html/assets/ico/favicon.png') }}') }}">
    <title>E-Procuretment</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('html/assets/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('html/assets/css/style.css') }}" rel="stylesheet">

    <!-- styles needed for carousel slider -->
    <link href="{{ asset('html/assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('html/assets/plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet">

    <!-- bxSlider CSS file -->
    <link href="{{ asset('html/assets/plugins/bxslider/jquery.bxslider.css') }}" rel="stylesheet"/>

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->
    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="{{ asset('html/assets/js/pace.min.js') }}"></script>
    <script src="{{ asset('html/assets/plugins/modernizr/modernizr-custom.js') }}"></script>


</head>
<body>
<div id="wrapper">

    <div class="header">
        <nav class="navbar  fixed-top navbar-site navbar-light bg-light navbar-expand-md"
             role="navigation">
            <div class="container">

                <div class="navbar-identity">

                    <a href="" class="navbar-brand logo logo-title">
    			<span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo "></i>
    			</span>E-Procuretment </a>

                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggler pull-right"
                            type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30"
                             focusable="false"><title>Menu</title>
                            <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10"
                                  d="M4 7h22M4 15h22M4 23h22"/>
                        </svg>
                    </button>
                </div>


                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav ml-auto navbar-right">
                        @if(!auth()->guest())
                        <li class="nav-item"><a href="{{ url('vendor/dashboard') }}" class="nav-link"><i
                                    class="icon-th-thumb"></i>
                                Dashboard</a>
                        </li>
                        <li class="dropdown no-arrow nav-item">
                            <a href="#" class="dropdown-toggle nav-link"
                               data-toggle="dropdown">

                                <span>Regsitrasi Lelang</span> <i
                                    class=" icon-down-open-big fa"></i></a>
                            <ul class="dropdown-menu user-menu dropdown-menu-right">

                                <li class="dropdown-item"><a href="{{ url('vendor/lelang_terbuka') }}"><i
                                            class="icon-th-thumb"></i> Lelang Terbuka</a>
                                </li>
                                <li class="dropdown-item"><a href="{{ url('vendor/lelang_tertutup') }}"><i
                                            class="icon-th-thumb"></i> Lelang Tertutup</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        <li class="postadd nav-item">
                        @if(!auth()->guest())
                        <li class="dropdown no-arrow nav-item">
                            <a href="#" class="dropdown-toggle nav-link"
                               data-toggle="dropdown">

                                <i class="fa fa-user"></i><span> {{ auth()->user()->name }}</span> <i
                                    class=" icon-down-open-big fa"></i></a>
                            <ul
                                class="dropdown-menu user-menu dropdown-menu-right">
                                <li class="active dropdown-item"><a href="#"><i class="icon-home"></i>
                                        My Profil
                                    </a>
                                </li>
                                <li class="dropdown-item"><a href="#"><i class="icon-th-thumb"></i> Setting</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href=""><i class=" icon-logout "></i> Log out
                                    </a>

                                </li>
                            </ul>
                        </li>
                        @else
                        <a class="btn btn-block   btn-border btn-post btn-danger nav-link"
                           href="{{ url('/') }}">Login</a>
                        @endif
                        </li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- /.header -->

@stack('card')

<!-- /.search-row -->
@yield('content')
<!-- /.main-container -->


    <footer class="main-footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-xl-12">

                        <div class="copy-info text-center">
                            &copy; 2019 E-Procuretment. All Rights Reserved.
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!--/.footer-->

</div>
<!-- /.wrapper -->


<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="../../../../cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('html/assets/js/jquery/jquery-3.3.1.min.js') }}">\x3C/script>')</script>

<script src="{{ asset('html/assets/js/vendors.min.js') }}"></script>

<!-- include custom script for site  -->
<script src="{{ asset('html/assets/js/main.min.js') }}"></script>


</body>

</html>
