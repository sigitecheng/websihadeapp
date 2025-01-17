@include('frontend.00_halamanutama.fitur.header')


<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="/assets/frontend/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img style="width: 35%;" src="/assets/icon/sihadelogo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li><i style="color: wheat" class="fa fa-building mr-2"></i> Jl. Pelesiran, Coblong, Bandung, Jawa Barat</li>
                                {{-- <li><i class="fas fa-envelope"></i> demo@gmail.com</li> --}}
                                <li>
                                    <a href="https://wa.me/62811237916" target="_blank">
                                        <i style="color: wheat" class="fa fa-phone mr-2"></i> <span style="color: white">0811237916</span>
                                    </a>
                                </li>
                                
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 location_icon_bottum">
                       <div class="row">
                            <div class="col-md-12 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li> <a href="#home">Home</a> </li>
                                                <li> <a href="#about">About</a> </li>
                                                <li><a href="#product">Products</a></li>
                                                <li><a href="#testimonial">Testimonial</a></li>
                                                {{-- <li><a href="#testimonial">Info Product</a></li> --}}
                                                <li><a href="#contact">Contact Us</a></li>
                                                <li>
                                                    <a href="/login" style="color: white; font-family: Roboto;">
                                                    <i class="fa fa-arrow-right"></i> Login
                                                </a>
                                                
                                                </li>
                                                {{-- <li><a href="#contact">Login</a></li> --}}

                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                            {{-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4"> --}}
                                {{-- <form class="search"> --}}
                                    {{-- <div class="container">
                                        <a href="/login">
                                            <i style="color: white" class="fa fa-arrow-right">Login</i>
                                        </a>
                                    </div> --}}
                                    
                                    {{-- <input class="form-control" type="text" placeholder="Search">
                                    <button><img src="/assets/frontend/images/search_icon.png"></button> --}}
                                {{-- </form> --}}
                            {{-- </div> --}}
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="slider_section" id="home">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ul>
            <div class="carousel-inner">
                
                {{-- ========================================================================== --}}
                @php
                $data = $databeranda->first(); // Mengambil data pertama dari koleksi
            @endphp
            
            @if($data)
                <div class="carousel-item">
                    <img class="first-slide" src="{{ asset('storage/profil/slide1.jpeg' )}}" alt="{{asset('storage/profil/slide1.jpeg' )}}">
                    
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1 style="font-size: 40px;">Sihade Organic Farm</h1>
                            <h1 style="font-size: 35px; color: green; font-weight: bold; font-family: 'Roboto';">FARMING COMPANY</h1>
                            <p>
                                {{ $data->judul }}
                            </p>

                            <a class="buynow" href="https://wa.me/62811237916" target="_blank">
                                <i class="fa fa-phone mr-2"></i>Contact Us
                            </a>
                            
                            {{-- <a class="buynow ggg" href="#">Get a quote</a> --}}
                        </div>
                    </div>
                </div>
            @endif
            

            @if($databeranda->count() > 1)
    <div class="carousel-item ">
        <img class="second-slide" src="{{asset('storage/profil/slide2.jpeg' )}}" alt="{{asset('storage/profil/slide2.jpeg' )}}">
        <div class="container">
            <div class="carousel-caption relative">
                <h1 style="font-size: 40px;">Sihade Organic Farm</h1>
                <h1 style="font-size: 35px; color: green; font-weight: bold; font-family: 'Roboto';">FARMING COMPANY</h1>
                <p>
                    {{ $databeranda[1]->judul }}
                </p>
            
                <a class="buynow" href="https://wa.me/62811237916" target="_blank">
                    <i class="fa fa-phone mr-2"></i>Contact Us
                </a>
                
            </div>
        </div>
    </div>
@endif

@if($databeranda->count() > 2)
    <div class="carousel-item active">
        <img class="first-slide" src="{{asset('storage/profil/slide3.jpeg')}}" alt="{{asset('storage/profil/slide3.jpeg')}}">
        <div class="container">
            <div class="carousel-caption relative">
                <h1 style="font-size: 40px;">Sihade Organic Farm</h1>
                <h1 style="font-size: 35px; color: green; font-weight: bold; font-family: 'Roboto';">FARMING COMPANY</h1>
                <p>
                    {{ $databeranda[2]->judul }}
                </p>
            
                <a class="buynow" href="https://wa.me/62811237916" target="_blank">
                    <i class="fa fa-phone mr-2"></i>Contact Us
                </a>
                
            </div>
        </div>
    </div>
@endif


            
                
                
                {{-- ========================================================================== --}}

            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>About SIHADE<br><strong class="black"> Farm and company</strong></h2>
                        <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                    
                        <a href="{{ asset('storage/' . $databrosur) }}" target="_blank">{{ asset('storage/' . $databrosur) }}</a>

                    
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="/assets/frontend/images/about.png" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- for_box -->
    <div class="for_box_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 co-sm-l2">
                    <div class="for_box">
                        <i><img src="/assets/frontend/images/1.png" alt="#"/></i>
                        <span>1996923</span>
                        <h3>Agriculture</h3>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 co-sm-l2">
                    <div class="for_box">
                        <i><img src="/assets/frontend/images/2.png" alt="#"/></i>
                        <span>8000</span>
                        <h3>Animal</h3>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 co-sm-l2">
                    <div class="for_box">
                        <i><img src="/assets/frontend/images/3.png" alt="#"/></i>
                        <span>60002</span>
                        <h3>Farm</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end for_box -->
    <!-- offer -->
    <div class="offer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Special <strong class="black"> Offers</strong></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="offer-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 ">
                        <div class="offer_box">
                            <h3>Agriculture Products</h3>
                            <figure><img src="/assets/frontend/images/offer1.png" alt="img" /></figure>
                            <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin_ttt">
                        <div class="offer_box">
                            <h3>Fresh Vegatables</h3>
                            <figure><img src="/assets/frontend/images/offer2.png" alt="img" /></figure>
                            <p>consectetur adipiscing elit, sed do eiusmodmpor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin-lkk">
                        <div class="offer_box">
                            <h3>Farm Factory</h3>
                            <figure><img src="/assets/frontend/images/offer3.png" alt="img" /></figure>
                            <p>consectetur adipiscing elit, sed do eiusmodmpor incididunt ut labore et dolore magna</p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <a class="read-more">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end offer -->

    <!-- product -->
    <div id="product" class="product">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Moon <strong class="black"> products</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="product_box">
                                <figure><img src="/assets/frontend/images/product_img1.jpg" alt="#" />
                                    <h3>Fresh Apple </h3></figure>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="product_box">
                                <figure><img src="/assets/frontend/images/product_img2.jpg" alt="#" />
                                    <h3>Fresh Aalu  </h3>
                                </figure>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="/assets/frontend/images/product_img4.jpg" alt="#" />
                                    <h3>Rice Field </h3></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="/assets/frontend/images/product_img3.jpg" alt="#" />
                                    <h3>Vegetables</h3></figure>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="/assets/frontend/images/product_img5.jpg" alt="#" />
                                    <h3>Field Wheat </h3></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <!-- end product -->
    <!-- clients -->
    <div id="testimonial" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>testimonial</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="testomonial_section">

                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                        <div class="testomonial_img">
                                            <i><img src="/assets/frontend/images/tes.jpg" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                        <div class="cross_inner">
                                            <h3>Johndue<br><strong class="ornage_color">Farm & CO</strong></h3>
                                            <p><img src="/assets/frontend/icon/1.png" alt="#" />ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                                <img src="/assets/frontend/icon/2.png" alt="#" />
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                        <div class="testomonial_img">
                                            <i><img src="/assets/frontend/images/tes.jpg" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                        <div class="cross_inner">
                                            <h3>Johndue<br><strong class="ornage_color">Farm & CO</strong></h3>
                                            <p><img src="/assets/frontend/icon/1.png" alt="#" />ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                                <img src="/assets/frontend/icon/2.png" alt="#" />
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                        <div class="testomonial_img">
                                            <i><img src="/assets/frontend/images/tes.jpg" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                        <div class="cross_inner">
                                            <h3>Johndue<br><strong class="ornage_color">Farm & CO</strong></h3>
                                            <p><img src="/assets/frontend/icon/1.png" alt="#" />ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                                <img src="/assets/frontend/icon/2.png" alt="#" />
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
  
    <!-- end clients -->
    <!-- contact -->

    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Get In <strong class="black"> Toucgh</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid padddd">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
            <div class="map_section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <form class="main_form">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Name" type="text" name="Name">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Phone" type="text" name="Phone">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="map">
                </div>

            </div>
        </div>
    </div>

   
    <!-- end contact -->


    @include('frontend.00_halamanutama.fitur.footer')