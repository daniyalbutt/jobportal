<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.c') }}ss">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.c') }}ss">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dropify.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.min.c') }}ss">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nice-select.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
</head>
<body>
    <div class="jb_preloader">
        <div class="spinner_wrap">
            <div class="spinner"></div>
        </div>
    </div>
    <div class="cursor cursor2 cursor3"></div>
        <a href="javascript:" id="return-to-top" class="return_top3"><i class="fas fa-angle-double-up"></i></a>
        <nav class="cd-dropdown cd_dropdown_index2 cd_dropdown_index3 d-block d-sm-block d-md-block d-lg-none d-xl-none">
            <h2><a href="{{ url('/') }}"> <span><img src="{{ asset('images/logo5.png') }}" alt="img"></span></a></h2>
            <a href="#0" class="cd-close">Close</a>
            <ul class="cd-dropdown-content">
                <li>
                    <form class="cd-search">
                        <input type="search" placeholder="Search...">
                    </form>
                </li>
                <li class="">
                    <a href="{{ url('welcome') }}">home</a>
                </li>
                @if (Route::has('login'))
                @auth
                <li class="">
                    <a href="{{ route('home') }}">dashboard</a>
                </li>
                @else
                <li class="btn_hover">
                    <a href="{{ route('login') }}">Log in</a>
                </li>
                @if (Route::has('register'))
                <li class="btn_hover">
                    <a href="{{ route('register') }}">Register</a>
                </li>
                @endif
                @endauth
                @endif
            </ul>
        </nav>
        <div class="cp_navi_main_wrapper index_2_top_header index_3_top_header jb_cover">
            <div class="cp_logo_wrapper index_2_logo index_3_logo">
                <a href="{{ url('/') }}">
                    JOB APPLY
                </a>
            </div>
            <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="cd-dropdown-wrapper">
                            <a class="house_toggle" href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                    <g>
                                    <g>
                                        <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#004165" />
                                    </g>
                                    <g>
                                        <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#004165" />
                                    </g>
                                    <g>
                                        <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#004165" />
                                    </g>
                                    <g>
                                        <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#004165" />
                                    </g>
                                    <g>
                                        <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#004165" />
                                    </g>
                                    </g>
                                </svg>
                            </a>
                            <!-- .cd-dropdown -->
                        </div>
                        </div>
                    </div>
                </div>
                <!-- .cd-dropdown-wrapper -->
            </header>
            <div class="jb_navigation_wrapper index_2_right_menu index_3_right_menu">
                <div class="posting_job">
                    <ul>
                        @auth
                        <div class="jb_profile_box jb_3_profile_box">
                            <div class="nice-select" tabindex="0">
                                <span class="current">
                                    @if(Auth::user()->profile != null)
                                    @if(Auth::user()->profile->user_image != null)
                                    <img src="{{ asset('users') }}/{{ Auth::user()->profile->user_image }}" alt="">
                                    @else
                                    <img src="{{ asset('images/profile.jpg') }}" alt="post_img">
                                    @endif
                                    @else
                                    <img src="{{ asset('images/profile.jpg') }}" alt="post_img">
                                    @endif
                                </span>
                                <ul class="list">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-in-alt"></i>logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        </li>
                        @endauth
                        @if (Route::has('login'))
                        @auth
                        @else
                        <li class="btn_hover">
                            <a href="{{ route('login') }}">Log in</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="btn_hover">
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                        @endif
                        @endauth
                        @endif
                    </ul>
                </div>
                <div class="mainmenu green_main_menu blue_main_menu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                    <ul class="main_nav_ul menu_2_ul">
                        @if (Route::has('login'))
                        @auth
                        <li class="gc_main_navigation">
                            <a href="{{ route('home') }}" class="gc_main_navigation">Dashboard</a>
                        </li>
                        @endauth
                        @endif
                    </ul>
                </div>
                <!-- mainmenu end -->
            </div>
        </div>

        @yield('content')

        <div class="news_letter_wrapper shaa jb_cover">
            <div class="sha1 bubble-180">
                <img src="{{ asset('images/bubble2.png') }}" class="img-responsive " alt="img">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="job_newsletter_wrapper jb_cover">
                        <div class="jb_newslwtteter_left">
                            <h2> Looking For A Job</h2>
                            <p>Your next level Product developemnt company assetsYour next level Product </p>
                        </div>
                        <div class="jb_newslwtteter_button">
                            <div class="btn_hover slider_btn jobs_btn_3">
                                <a href="#">submit</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sha2 bubble-185">
                <img src="{{ asset('images/bubble2.png') }}" class="img-responsive " alt="img">
            </div>
        </div>

    <div class="footer index2_footer_wrapper footer_index3 shaa jb_cover">
        <div class="ft_shape bubble-18">
            <img src="images/bubble2.png" class="img-responsive " alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover">
                    <a href="#"><img src="{{ asset('images/logo5.png') }}" alt="img"></a>
                    <ul class="footer_first_contact">
                        <li>
                            <i class="flaticon-location-pointer"></i>
                            <p>123 City Avenue, Floor 10,
                                <br> malbourne, Australia.
                            </p>
                        </li>
                        <li>
                            <i class="flaticon-telephone"></i>
                            <p>1 -234 -456 -7890
                                <br> 1 -234 -456 -7890
                            </p>
                        </li>
                        <li><i class="flaticon-envelope"></i><a href="#">info@Jbdesks.com </a>
                            <br>
                            <a href="#">support@Jbdesks.com</a>
                        </li>
                    </ul>
                    <ul class="icon_list_news index2_icon_list jb_cover">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover footer_border_displ">
                    <h5>features</h5>
                    <ul class="nav-widget">
                        <li><a href="#"><i class="fa fa-square"></i>Job Management & Billing
                            </a>
                        </li>
                        <li><a href="#"><i class="fa fa-square"></i>Time & Materials Tracking
                            </a>
                        </li>
                        <li><a href="#"><i class="fa fa-square"></i>Standards Compliance 
                            </a>
                        </li>
                        <li><a href="#"><i class="fa fa-square"></i>Real Time GPS Tracking
                            </a>
                        </li>
                        <li><a href="#"><i class="fa fa-square"></i>Client Portal
                            </a>
                        </li>
                        <li><a href="#"><i class="fa fa-square"></i> Powerful Workflow</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover footer_border_displ">
                    <h5>browse</h5>
                    <ul class="nav-widget">
                        <li><a href="#"><i class="fa fa-square"></i>Freelancers by Category</a></li>
                        <li><a href="#"><i class="fa fa-square"></i> Freelancers in USA </a></li>
                        <li><a href="#"><i class="fa fa-square"></i> Freelancers in UK</a></li>
                        <li><a href="#"><i class="fa fa-square"></i> Freelancers in Canada</a></li>
                        <li><a href="#"><i class="fa fa-square"></i> Freelancers in india</a></li>
                        <li><a href="#"><i class="fa fa-square"></i> find jobs</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover footer_border_displ">
                    <h5>app & integration</h5>
                    <ul class="nav-widget">
                        <li>
                            <a href="#"><img src="images/ft1.png" alt="img">Xero
                            </a>
                        </li>
                        <li>
                            <a href="#"><img src="images/ft2.png" alt="img">Reckon
                            </a>
                        </li>
                        <li>
                            <a href="#"><img src="images/ft3.png" alt="img">Flexidocs
                            </a>
                        </li>
                        <li>
                            <a href="#"><img src="images/ft4.png" alt="img">Microsoft Exchange</a>
                        </li>
                        <li>
                            <a href="#"><img src="images/ft5.png" alt="img"> Mailchimp
                            </a>
                        </li>
                        <li>
                            <a href="#"><img src="images/ft6.png" alt="img"> MYOB
                            </a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="copyright_left"><i class="fa fa-copyright"></i> 2024 <a href="#">  Custom Website.  </a> All Rights Reserved.
                </div>
                <div class="clearfix"></div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgTop gradient-color">
                <div class="wave waveTop wavetop_1 wavetop_3"></div>
            </div>
            <div class="waveWrapperInner bgMiddle">
                <div class="wave waveMiddle"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
                <div class="wave waveBottom wavebottom_1 wavebottom_3"></div>
            </div>
        </div>
        <div class="ft_shape2 bubble-190">
            <img src="images/bubble2.png" class="img-responsive " alt="img">
        </div>
        <div class="ft_shape1 bubble-19">
            <img src="images/bubble2.png" class="img-responsive " alt="img">
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/jquery.menu-aim.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    <script src="{{ asset('js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    @stack('script')
</body>
</html>
