<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Hi, my name is Kevin Giovanni!">
        <meta name="author" content="Kevin Giovanni">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#f4f4f4">

        <title>Kevin Giovanni - Welcome to my personal page!</title>

        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="css/app.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120511728-3"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-120511728-3');
        </script>

    </head>

    <body id="page-top">

        <!-- Navigation -->
        <a class="menu-toggle rounded" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav text-center">
                <li class="sidebar-brand">
                    <a class="js-scroll-trigger" href="#page-top">Kevin Giovanni</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="#services">Services</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="#portfolio">Portfolio</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Header -->
        <header class="masthead d-flex">
            <div class="container text-center my-auto">
                <h1 class="mb-1">Hi, Halo!</h1>
                <h3 class="mb-5">
                    <em>Welcome to my personal page - Kevin Giovanni</em>
                </h3>
                <a class="btn btn-primary btn-xl js-scroll-trigger animated pulse infinite" href="#about">Find Out More</a>
            </div>
            <div class="overlay"></div>
        </header>

        <!-- About -->
        <section class="content-section bg-light" id="about">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h2>Practice makes perfect!</h2>
                        <div class="row my-5">
                            <div class="col-lg-6 col-sm-12 order-2  order-lg-1">
                                <p class="lead text-justify">
                                    Young and passionate developer who used to create web based application.
                                    I combine HTML, CSS, Javascript and PHP to make beautiful and responsive website.
                                    I have interest in web, mobile app development and machine learning. Currently,
                                    I'm a freelance web developer based in Yogyakarta. Feel free to contact me via email down bellow.
                                </p>
                            </div>
                            <div class="col-lg-6 col-sm-12 order-1">
                                <img src="{{ asset('img/kevin.jpg') }}" class="img-fluid mb-3" alt="s"/>
                            </div>
                        </div>
                        <div class="row tools">
                            <div class="col">
                                <img src="{{ asset('img/html5.png') }}" alt="html5" class="img-techs">
                                HTML5
                            </div>
                            <div class="col">
                                <img src="{{ asset('img/css3.png') }}" alt="css3" class="img-techs">
                                CSS3
                            </div>
                            <div class="col">
                                <img src="{{ asset('img/bootstrap.png') }}" alt="bootstrap" class="img-techs">
                                Bootstrap
                            </div>
                            <div class="col">
                                <img src="{{ asset('img/laravel.png') }}" alt="laravel" class="img-techs">
                                Laravel
                            </div>
                            <div class="col">
                                <img src="{{ asset('img/javascript.png') }}" alt="javascript" class="img-techs">
                                Javascript
                            </div>
                            <div class="col">
                                <img src="{{ asset('img/vuejs.png') }}" alt="vuejs" class="img-techs">
                                VueJs
                            </div>
                            <div class="col">
                                <img src="{{ asset('img/webpack.png') }}" alt="webpack" class="img-techs">
                                Webpack
                            </div>
                            <div class="col">
                                <img src="{{ asset('img/github.png') }}" alt="github" class="img-techs">
                                Github
                            </div>
                        </div>
                        <div class="row tools">
                            <div class="col">
                                <img src="{{ asset('img/aws.png') }}" alt="aws" class="img-techs" style="width: 200px; height: auto;"><br>
                                Amazon Web Services
                            </div>
                            <div class="col">
                                <img src="{{ asset('img/awscode_star.png') }}" alt="php" class="img-techs"><br>
                                AWS Code Star
                            </div>
                            <div class="col">
                                <img src="{{ asset('img/ci.png') }}" alt="ci" class="img-techs"><br>
                                CodeIgniter
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="content-section bg-primary text-white text-center" id="services">
            <div class="container">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Services</h3>
                    <h2 class="mb-5">What I Do</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3">
                            <i class="icon-screen-smartphone"></i>
                        </span>
                        <h4>
                            <strong>Responsive</strong>
                        </h4>
                        <p class="text-faded mb-0">Looks great on any screen size!</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3">
                            <i class="icon-pencil"></i>
                        </span>
                        <h4>
                            <strong>Redesigned</strong>
                        </h4>
                        <p class="text-faded mb-0">Freshly redesigned a website.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                        <span class="service-icon rounded-circle mx-auto mb-3">
                            <i class="icon-like"></i>
                        </span>
                        <h4>
                            <strong>Good Price</strong>
                        </h4>
                        <p class="text-faded mb-0">Good website with good price!</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <span class="service-icon rounded-circle mx-auto mb-3">
                            <i class="icon-rocket"></i>
                        </span>
                        <h4>
                            <strong>Rapid Development</strong>
                        </h4>
                        <p class="text-faded mb-0">Just in time!</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio -->
        <section class="content-section" id="portfolio">
            <div class="container">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">Portfolio</h3>
                    <h2 class="mb-5">Recent Projects</h2>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="https://helipos.com">
                            <span class="caption">
                                <span class="caption-content">
                                    <h2>HeliPOS</h2>
                                    <p class="mb-0">Point of sales application, available on Google Play Store</p>
                                </span>
                            </span>
                            <img class="img-fluid" src="img/helipos.jpeg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="https://olshop-dev.herokuapp.com">
                            <span class="caption">
                                <span class="caption-content">
                                    <h2>Online Store</h2>
                                    <p class="mb-0">Web based online store application</p>
                                </span>
                            </span>
                            <img class="img-fluid" src="img/online-shop.jpeg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="javascript: void(0)">
                            <span class="caption">
                                <span class="caption-content">
                                    <h2>JBQA</h2>
                                    <p class="mb-0">Teacher evaluation software created for SMA Kolese De Britto Yogyakarta</p>
                                </span>
                            </span>
                            <img class="img-fluid" src="img/jbqa.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="javascript: void(0)">
                            <span class="caption">
                                <span class="caption-content">
                                    <h2>E-Cashier</h2>
                                    <p class="mb-0">Web based online cashier for Boedjank Vape Houz</p>
                                </span>
                            </span>
                            <img class="img-fluid" src="img/boedjankvape.jpeg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="https://hub.softwareseni.co.id" target="_blank">
                            <span class="caption">
                                <span class="caption-content">
                                    <h2>SS Hub</h2>
                                    <p class="mb-0">Internal Softwareseni application which handle all about work things</p>
                                </span>
                            </span>
                            <img class="img-fluid" src="img/sshub.jpeg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="https://schoolselector.com.au" target="_blank">
                            <span class="caption">
                                <span class="caption-content">
                                    <h2>School Selector</h2>
                                    <p class="mb-0">Australia's first holistic school rating system for parents by parents</p>
                                </span>
                            </span>
                            <img class="img-fluid" src="img/schoolselector.jpeg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="https://github.com/kevingio/movie_dashboard" target="_blank">
                            <span class="caption">
                                <span class="caption-content">
                                    <h2>WeStream</h2>
                                    <p class="mb-0">Movies streaming website using The Movie Database (TMDB) and Hydra Movies API</p>
                                </span>
                            </span>
                            <img class="img-fluid" src="img/westream.jpeg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#" target="_blank">
                            <span class="caption">
                                <span class="caption-content">
                                    <h2>Smart Home</h2>
                                    <p class="mb-0">Prototype of smart home concept with android integration and Google Now</p>
                                </span>
                            </span>
                            <img class="img-fluid" src="img/smarthome.jpeg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Parallax -->
        <div class="parallax"></div>

        <!-- Instagram -->
        <section class="content-section">
            <div class="container text-center">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">Social Media</h3>
                    <h2 class="mb-5">Instagram</h2>
                </div>
                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-auto">
                        <img src="{{ $instagram[0]->user->profile_picture }}" class="img-fluid rounded-circle" style="width: 100px;" alt="Kevin Giovanni">
                    </div>
                    <div class="col-auto text-left">
                        <h3 class="mb-0">{{ $instagram[0]->user->full_name }}</h3>
                        <a href="https://www.instagram.com/{{ $instagram[0]->user->username }}" target="_blank">{{ '@' . $instagram[0]->user->username }}</a>
                    </div>
                </div>
                <div class="row px-2">
                    @foreach($instagram as $data)
                        <div class="col-lg-4 col-md-6 px-1">
                            <img src="{{ $data->images->standard_resolution->url }}" class="img-instagram" alt="{{ $data->caption->text or '' }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="content-section bg-primary" id="contact">
            <div class="container text-center">
                <h2 class="mb-4 text-white">Get in touch</h2>
                <a href="mailto:kevinevraldo@gmail.com" class="btn btn-xl btn-secondary mb-5">
                    <i class="fa fa-envelope mr-2"></i>
                    Email Me!
                </a>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer text-center">
            <div class="container">
                <ul class="list-inline mb-3 mt-0">
                    <li class="list-inline-item my-2">
                        <a class="social-link rounded-circle text-white mr-2" href="https://www.facebook.com/KevinEvraldo">
                            <i class="icon-social-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item my-2">
                        <a class="social-link rounded-circle text-white mr-2" href="https://www.instagram.com/kevinevraldo/">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item my-2">
                        <a class="social-link rounded-circle text-white mr-2" href="https://www.linkedin.com/in/kevin-giovanni-b83076125/">
                            <i class="icon-social-linkedin"></i>
                        </a>
                    </li>
                    <li class="list-inline-item my-2">
                        <a class="social-link rounded-circle text-white" href="https://github.com/kevingio">
                            <i class="icon-social-github"></i>
                        </a>
                    </li>
                </ul>
                <p class="text-muted mb-0">Hand-crafted & Made with <i class="fa fa-heart text-danger"></i> by Kevin Giovanni</p>
            </div>
        </footer>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript -->
        <script src="js/app.js"></script>

    </body>

</html>
