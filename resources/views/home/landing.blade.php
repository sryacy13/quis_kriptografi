    <!DOCTYPE html>
    <html lang="en">
    <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>project saya</title>
    <!--
    App Starter Template
    http://www.templatemo.com/tm-492-app-starter
    -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.carousel.css">

    <link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

    </head>
    <body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


    <!-- PRE LOADER -->

    <div class="preloader">
        <div class="sk-spinner sk-spinner-pulse"></div>
    </div>



    <!-- Navigation Section -->

    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <a href="index.html" class="navbar-brand"><span>App</span> Starter</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">About</a></li>
                    <li><a href="#screenshot" class="smoothScroll">Screenshots</a></li>
                    <li><a href="#pricing" class="smoothScroll">Pricing</a></li>
                    <li><a href="#newsletter" class="smoothScroll">Newsletter</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#modal1">Contact</a></li>
                </ul>
            </div>

        </div>
    </div>


    <!-- Home Section -->

    <section id="home" class="main">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="wow fadeInUp col-md-6 col-sm-5 col-xs-10 col-xs-offset-1 col-sm-offset-0" data-wow-delay="0.2s">
                        <img src="images/home-img.png" class="img-responsive" alt="Home">
                </div>

                <div class="col-md-6 col-sm-7 col-xs-12">
                        <div class="home-thumb">
                            <h1 class="wow fadeInUp" data-wow-delay="0.6s"> Selamat Datang</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.8s">project laravel sederhana by Asri</p>
                            @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 wow fadeInUp section-btn btn btn-success smoothScroll">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 wow fadeInUp section-btn btn btn-success smoothScroll">Log in</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 wow fadeInUp section-btn btn btn-success smoothScroll">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                        </div>
                </div>

            </div>
        </div>
    </section>


    <!-- About Section -->

    <section id="about">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                        <div class="wow bounceIn section-title">
                            <h1>welcome to new app</h1>
                            <hr>
                        </div>
                </div>

                <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                    <h2>Our Mobile App Team</h2>
                    <h3 class="wow fadeInUp" data-wow-delay="0.8s">App Starter page is provided by templatemo that can be used for any site.</h3>
                    <p class="wow fadeInUp" data-wow-delay="0.4s">This is a responsive <a href="https://plus.google.com/+templatemo" target="_blank">HTML CSS template</a> designed for your mobile app pages. You can modify and use it to fit your needs.</p>
                </div>

                <div class="wow fadeInUp col-md-3 col-sm-6" data-wow-delay="0.4s">
                        <div class="about-thumb">
                            <img src="images/team-img1.jpg" class="img-responsive" alt="Team">
                                <div class="about-overlay">
                                    <h3>Sandar Lynn</h3>
                                    <h4>UI Designer</h4>
                                    <ul class="social-icon">
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                    </ul>
                                </div>
                        </div>
                </div>

                    <div class="wow fadeInUp col-md-3 col-sm-6" data-wow-delay="0.4s">
                        <div class="about-thumb">
                            <img src="images/team-img2.jpg" class="img-responsive" alt="Team">
                                <div class="about-overlay">
                                    <h3>Candy </h3>
                                    <h4>UX Specialist</h4>
                                    <ul class="social-icon">
                                            <li><a href="#" class="fa fa-pinterest"></a></li>
                                            <li><a href="#" class="fa fa-behance"></a></li>
                                            <li><a href="#" class="fa fa-google-plus"></a></li>
                                    </ul>
                                </div>
                        </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Divider Section -->

    <section id="divider">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                        <h2 class="wow fadeInUp" data-wow-delay="0.4s">Praesent tempor nec orci eu condimentum. Vestibulum varius lorem sed odio lacinia, ut efficitur tellus convallis. Phasellus convallis est nisi, sit amet accumsan ipsum elementum quis. Mauris ac sem mi.</h2>
                        <a href="#screenshot" class="wow fadeInUp section-btn btn btn-success smoothScroll" data-wow-delay="0.8s">Learn More</a>
                </div>

            </div>
        </div>
    </section>


    <!-- Screenshot Section -->

    <section id="screenshot">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                        <div class="section-title">
                            <h1>App Screenshots</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.8s">Nulla nisi purus, ultrices et scelerisque at, ullamcorper et ex. Phasellus at nisi lobortis, semper tortor sed, gravida neque.</p>
                        </div>
                </div>

                <!-- Screenshot Owl Carousel -->
                <div id="screenshot-carousel" class="owl-carousel">

                        <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                            <a href="images/screenshot-img1.jpg" class="image-popup">
                                <img src="images/screenshot-img1.jpg" class="img-responsive" alt="screenshot">
                            </a>
                        </div>

                        <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                            <a href="images/screenshot-img2.jpg" class="image-popup">
                                <img src="images/screenshot-img2.jpg" class="img-responsive" alt="screenshot">
                            </a>
                        </div>

                        <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                            <a href="images/screenshot-img3.jpg" class="image-popup">
                                <img src="images/screenshot-img3.jpg" class="img-responsive" alt="screenshot">
                            </a>
                        </div>

                        <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                            <a href="images/screenshot-img4.jpg" class="image-popup">
                                <img src="images/screenshot-img4.jpg" class="img-responsive" alt="screenshot">
                            </a>
                        </div>

                        <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                            <a href="images/screenshot-img5.jpg" class="image-popup">
                                <img src="images/screenshot-img5.jpg" class="img-responsive" alt="screenshot">
                            </a>
                        </div>

                        <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                            <a href="images/screenshot-img6.jpg" class="image-popup">
                                <img src="images/screenshot-img6.jpg" class="img-responsive" alt="screenshot">
                            </a>
                        </div>

                        <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                            <a href="images/screenshot-img7.jpg" class="image-popup">
                                <img src="images/screenshot-img7.jpg" class="img-responsive" alt="screenshot">
                            </a>
                        </div>

                        <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                            <a href="images/screenshot-img8.jpg" class="image-popup">
                                <img src="images/screenshot-img8.jpg" class="img-responsive" alt="screenshot">
                            </a>
                        </div>

                </div>

            </div>
        </div>
    </section>


    <!-- Pricing Section -->

    <section id="pricing">
        <div class="container">
            <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <div class="section-title">
                            <h1>App Pricing</h1>
                            <hr>
                        </div>
                </div>

                <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.4s">
                        <div class="pricing-plan">
                            <div class="pricing-month">
                                <h2>$60</h2>
                            </div>
                            <div class="pricing-title">
                                <h3>Starter</h3>
                            </div>
                            <p>40 Users</p>
                            <p>10GB per user</p>
                            <p>Unlimited Support</p>
                            <p>1 Year License</p>
                            <button class="btn btn-default section-btn">Register now</button>
                        </div>
                </div>

                <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
                        <div class="pricing-plan">
                            <div class="pricing-month">
                                <h2>$120</h2>
                            </div>
                            <div class="pricing-title">
                                <h3>Business</h3>
                            </div>
                            <p>100 Users</p>
                            <p>20GB per user</p>
                            <p>Unlimited Support</p>
                            <p>2 Years License</p>
                            <button class="btn btn-default section-btn">Register now</button>
                        </div>
                </div>

                <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.8s">
                        <div class="pricing-plan">
                            <div class="pricing-month">
                                <h2>$200</h2>
                            </div>
                            <div class="pricing-title">
                                <h3>Advanced</h3>
                            </div>
                            <p>200 Users</p>
                            <p>30GB per user</p>
                            <p>Unlimted Support</p>
                            <p>3 Years License</p>
                            <button class="btn btn-default section-btn">Register now</button>
                        </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Newsletter Section -->

    <section id="newsletter">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                        <div class="wow bounceIn section-title">
                            <h2>Subscribe Newsletter</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.5s">Maecenas orci sem, mollis quis risus a, venenatis condimentum felis. Integer ut bibendum ipsum. Etiam a tristique sapien, ut dictum augue.</p>
                        </div>
                        <div class="wow fadeInUp newsletter-form" data-wow-delay="0.8s">
                            <form action="#" method="post">
                                <div class="col-md-8 col-sm-7">
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your Email here">
                                </div>
                                <div class="col-md-4 col-sm-5">
                                    <input name="submit" type="submit" class="form-control" id="submit" value="Send Newsletter">
                                </div>
                            </form>
                        </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Footer Section -->

    <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-6">
                        <div class="wow fadeInUp footer-copyright" data-wow-delay="0.4s">
                            <p>Copyright &copy; 2016 Your App Starter
                            <span>||</span> 
                            Design: <a href="https://plus.google.com/+templatemo" title="free css templates" target="_blank">Templatemo</a></p>
                        </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <ul class="wow fadeInUp social-icon" data-wow-delay="0.8s">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-dribbble"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                </div>
                
            </div>
        </div>
    </footer>


    <!-- Modal Contact -->

    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title">Contact Form</h2>
            </div>

                <form action="#" method="post">
                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email Address" required>
                        <textarea name="message" rows="3" class="form-control" id="message" placeholder="Message" required></textarea>
                        <input name="submit" type="submit" class="form-control" id="submit" value="Send Message">
                </form>
            </div>
        </div>
    </div>


    <!-- Back top -->

    <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>


    <!-- SCRIPTS -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>

    </body>
    </html>