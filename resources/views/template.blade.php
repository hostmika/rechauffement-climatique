<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Weather App Landing page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">


        <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/iconfont.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootsnav.css')}}">



        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->
        <!--Theme custom css -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

        <script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed white no-background">
                <div class="container">  

                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>        
                    <!-- End Atribute Navigation -->


                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                            <img src="{{ asset('assets/images/logo.png" class="logo logo-display') }}" alt="">
                            <img src="{{ asset('assets/images/footer-logo.png" class="logo logo-scrolled') }}" alt="">
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-center">
                            <li><a href="#home">Home</a></li>                    
                            <li><a href="#features">Features</a></li>
                            <li><a href="#reviews">Reviews</a></li>
                            <li><a href="#download">Download</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>   
            </nav>

            <!--Home Sections-->
            <section id="home" class="home">
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <div class="col-md-6">
                                <div class="home_text">
                                    <h1 class="text-white">Get the most fun weather app</h1>
                                </div>

                                <div class="home_btns m-top-40">
                                    <a href="https://bootstrapthemes.co" target="_blank" class="btn btn-danger m-top-20">Download</a>
                                    <a href="" class="btn btn-primary m-top-20">Features</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="phone_one phone_attr1 text-center sm-m-top-50">
                                    <div class="attr_deg">9&deg;</div>
                                    <div class="attr_rio text-uppercase">Rio</div>
                                    <div class="attr_sun text-uppercase text-white">Sunny</div>
                                    <div class="attr_lon text-uppercase text-white">London</div>
                                    <img src="{{ asset('assets/images/phone01.png') }}" alt="" />
                                </div>
                            </div>

                        </div>
                        <div class="scrooldown">
                            <a href="#features"><i class="fa fa-chevron-down"></i></a>
                        </div>

                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->



            <!--Featured Section-->
            <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        <div class="main_features p-top-100">
                            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                                <div class="head_title text-center">
                                    <h2>Perfect Features</h2>
                                    <h5>Only necessary</h5>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-diamond6"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Usability</h3>
                                        <p>Sometimes the simplest things are the hardest to find. 
                                            So we created a new line for everyday life</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-layers2"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Parallax Effect</h3>
                                        <p>Sometimes the simplest things are the hardest to find. 
                                            So we created a new line for everyday life</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-business-32"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Unlimites Colors</h3>
                                        <p>Sometimes the simplest things are the hardest to find. 
                                            So we created a new line for everyday life</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->



            <section>
                <div class="container">
                    <div class="row">
                        <div class="main_drag roomy-50">
                            <div class="col-md-12">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" style="background-image:url({{ asset('assets/images/drag1.png') }})"></div>
                                        <div class="swiper-slide" style="background-image:url({{ asset('assets/images/drag3.png') }})"></div>
                                        <div class="swiper-slide" style="background-image:url({{ asset('assets/images/drag2.png') }})"></div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            @yield('content')



            <!--People Section-->
            <section id="reviews" class="reviews m-top-100">
                <div class="container">
                    <div class="row">
                        <div class="main_reviews">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="head_title text-center">
                                    <h2>What reviews are saying</h2>
                                    <h5>Reviews</h5>
                                </div>
                            </div>

                            <div class="reviews_content">
                                <div class="col-md-6">
                                    <div class="reviews_item m-top-40">
                                        <div class="reviews_item_icon pull-left">“</div>
                                        <h3>What art offers is space - a certain breathing room for the spirit. </h3>
                                        <h5>John Updike</h5>
                                        <div class="reviews_item_icon1 pull-right text-right">“</div>
                                    </div>
                                </div><!-- End off col-md-6 -->

                                <div class="col-md-6">
                                    <div class="reviews_item m-top-40">
                                        <div class="reviews_item_icon pull-left">“</div>
                                        <h3>We do not see nature with our eyes,
                                            but with our understandings and our hearts.</h3>
                                        <h5>William Hazlitt</h5>
                                        <div class="reviews_item_icon1 pull-right text-right">“</div>
                                    </div>
                                </div><!-- End off col-md-6 -->
                                <div class="col-md-6">
                                    <div class="reviews_item m-top-40">
                                        <div class="reviews_item_icon pull-left">“</div>
                                        <h3>The only courage that matters is the kind 
                                            that gets you from one moment to the next.</h3>
                                        <h5>Mignon McLaughlin</h5>
                                        <div class="reviews_item_icon1 pull-right text-right">“</div>
                                    </div>
                                </div><!-- End off col-md-6 -->
                                <div class="col-md-6">
                                    <div class="reviews_item m-top-40">
                                        <div class="reviews_item_icon pull-left">“</div>
                                        <h3>No man has a good enough memory to be a successful liar. </h3>
                                        <h5>Abraham Lincoln</h5>
                                        <div class="reviews_item_icon1 pull-right text-right">“</div>
                                    </div>
                                </div><!-- End off col-md-6 -->

                            </div>
                        </div><!-- End off Main People -->
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off People Section-->


            <!-- scroll up-->
            <div class="scrollup">
                <a href="#"><i class="fa fa-chevron-up"></i></a>
            </div><!-- End off scroll up -->
            
            
            
            @include('pages.footer')



        </div>

        <!-- JS includes -->

        <script src="{{ asset('assets/js/vendor/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.collapse.js') }}"></script>
        <script src="{{ asset('assets/js/bootsnav.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

    </body>
</html>
