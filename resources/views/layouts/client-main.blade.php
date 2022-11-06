<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../client/css/bootstrap.min.css">
    <link rel="stylesheet" href="../client/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../client/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../client/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../client/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../client/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../client/css/daterangepicker.css">
    <link rel="stylesheet" href="../client/css/aos.css">
    <link rel="stylesheet" href="../client/css/style.css">

    <title>Supertravellers Agency</title>
</head>

<body>
    @include('layouts.client-navbar')
    @yield('content')

    <div class="py-5 cta-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="mb-2 text-white">Explore the Best Today. Contact Us Now</h2>
                    <p class="mb-4 lead text-white text-white-opacity">Travel well, Experience the World with us.</p>
                    <p class="mb-0"><a href="/contact"
                            class="btn btn-outline-white text-white btn-md font-weight-bold">Get in touch</a></p>
                </div>
            </div>
        </div>
    </div>


    <div class="site-footer">
        <div class="inner first">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="widget">
                            <h3 class="heading">About Tour</h3>
                            <p>
                                Supertravellers is a Travel Agency offering Holiday packages and wildlife
                                Safaris within Kenya. Our experience , dedication , professionalism ,
                                commitment and reliability have made us the most preferred and reliable Tour Operator.
                            </p>
                        </div>
                        <div class="widget">
                            <ul class="list-unstyled social">
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="widget">
                            <h3 class="heading">Contact</h3>
                            <ul class="list-unstyled quick-info links">
                                <li class="email"><a href="#">info@supertravellers.tours</a></li>
                                <li class="phone"><a href="#">+254 712 345 678</a></li>
                                <li class="address"><a href="#">Nairobi, Kenya</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="inner dark">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-8 mb-3 mb-md-0 mx-auto">
                        <p>Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash; Supertravellers Agency
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="../client/js/jquery-3.4.1.min.js"></script>
    <script src="../client/js/popper.min.js"></script>
    <script src="../client/js/bootstrap.min.js"></script>
    <script src="../client/js/owl.carousel.min.js"></script>
    <script src="../client/js/jquery.animateNumber.min.js"></script>
    <script src="../client/js/jquery.waypoints.min.js"></script>
    <script src="../client/js/jquery.fancybox.min.js"></script>
    <script src="../client/js/aos.js"></script>
    <script src="../client/js/moment.min.js"></script>
    <script src="../client/js/daterangepicker.js"></script>

    <script src="../client/js/custom.js"></script>
    @include('sweetalert::alert')
    @yield('js')

</body>

</html>
