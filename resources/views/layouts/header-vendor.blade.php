
<header class="main-header">
    <!-- Logo -->
{{--    <a href="" class="logo">--}}
{{--        <!-- mini logo -->--}}
{{--        <div class="logo-mini">--}}
{{--            <span class="light-logo"><img src="{{ asset('temp/images/logo-light.png') }}" alt="logo"></span>--}}
{{--            <span class="dark-logo"><img src="{{ asset('temp/images/logo-dark.png') }}" alt="logo"></span>--}}
{{--        </div>--}}
{{--        <!-- logo-->--}}
{{--        <div class="logo-lg">--}}
{{--            <span class="light-logo"><img src="{{ asset('temp/images/logo-light-text.png') }}" alt="logo"></span>--}}
{{--            <span class="dark-logo"><img src="{{ asset('temp/images/logo-dark-text.png') }}" alt="logo"></span>--}}
{{--        </div>--}}
{{--    </a>--}}
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" style="margin-left:0px;">
        <!-- Sidebar toggle button-->
        <div>
            <div class="logo-mini" style="margin-left:10px;">
                <span class="light-logo"><img src="{{ asset('temp/images/logo-light.png') }}" alt="logo"></span>
                <span class="light-logo"><img src="{{ asset('temp/images/logo-light-text.png') }}" alt="logo"></span>
            </div>
        </div>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="search-box">
                    <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
                    <form class="app-search" style="display: none;">
                        <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                    </form>
                </li>
                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('temp/images/avatar/7.jpg') }}" class="user-image rounded-circle" alt="User Image">
                    </a>
                    <ul class="dropdown-menu animated flipInY">
                        <!-- User image -->
                        <li class="user-header bg-img" style="background-image: url({{ asset('temp/images/user-info.jpg') }})" data-overlay="3">
                            <div class="flexbox align-self-center">
                                <img src="{{ asset('temp/images/avatar/7.jpg') }}" class="float-left rounded-circle" alt="User Image">
                                <h4 class="user-name align-self-center">
                                    <span>{{ auth()->user()->name }}</span>
                                    <small>{{ auth()->user()->email }}</small>
                                </h4>
                            </div>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault();
                                window.location='{{ route('logout')}}';
                                document.getElementById('logout-form').submit();">
                                <i class="ion-log-out"></i>
                                Logout
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    </ul>
                </li>



            </ul>
        </div>
    </nav>
</header>
