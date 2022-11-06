<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="zNuV3mnvLPVoOTuRl8KAK4e9tTMDAUlg6lDGrAkh">
    <meta name="description" content="CIT Tracer System">
    <meta name="theme credits" content="Spruko Technologies Private Limited">
    <meta name="author" content="Musumbi Denis">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../admin/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Supertravellers|Travel Agency</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../admin/css/style.css" rel="stylesheet" />
    <link href="../admin/css/dark-style.css" rel="stylesheet" />
    <link href="../admin/css/transparent-style.css" rel="stylesheet">
    <link href="../admin/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../admin/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../admin/colors/color1.css" />


</head>

<body class="app sidebar-mini ltr login-img">
    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src="../admin/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL-LOADER -->


        <div class="page">
            <div class="">
                <!-- CONTAINER -->
                <div class="container-login100">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation" action="/register" method="post" novalidate>
                                        {{ csrf_field() }}

                                        <span class="login100-form-title">
                                            Register
                                        </span>

                                        <div class="row">
                                            <div class="col-xl-6 mb-3">
                                                <div class="wrap-input100 input-group">
                                                    <span class="input-group-text bg-white text-muted">
                                                        <i class="zmdi zmdi-account-circle" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="text"
                                                        class="input100 border-start-0 ms-0 form-control"
                                                        name="first_name" value="{{ old('first_name') }}" required
                                                        placeholder="First Name">
                                                    <div class="invalid-feedback">Please provide a valid name.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <div class="wrap-input100 input-group">
                                                    <span class="input-group-text bg-white text-muted">
                                                        <i class="zmdi zmdi-account-circle" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="text"
                                                        class="input100 border-start-0 ms-0 form-control" name="surname"
                                                        value="{{ old('surname') }}" required placeholder="Surname">
                                                    <div class="invalid-feedback">Please provide a valid name.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 mb-3">
                                                <div class="wrap-input100 input-group">
                                                    <span class="input-group-text bg-white text-muted">
                                                        <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="email"
                                                        class="input100 border-start-0 ms-0 form-control" name="email"
                                                        value="{{ old('email') }}" required placeholder="Email Address">
                                                    <div class="invalid-feedback">Please provide a valid email address.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <div class="wrap-input100 input-group">
                                                    <span class="input-group-text bg-white text-muted">
                                                        <i class="zmdi zmdi-account-circle" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="tel"
                                                        class="input100 border-start-0 ms-0 form-control"
                                                        name="phone" value="{{ old('phone') }}" required
                                                        placeholder="Phone, e.g 0712345678" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$">
                                                    <div class="invalid-feedback">Please provide a phone number in the requested format.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 mb-3">
                                                <div class="wrap-input100 input-group" id="Password-toggle">
                                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                        <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                                                    </a>
                                                    <input type="text"
                                                        class="input100 border-start-0 ms-0 form-control"
                                                        name="password" value="" required
                                                        placeholder="password">
                                                    <div class="invalid-feedback">Please provide a password.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <div class="wrap-input100 input-group" id="Password-toggle1">
                                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                        <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                                                    </a>
                                                    <input type="text"
                                                        class="input100 border-start-0 ms-0 form-control" name="password_confirmation"
                                                        value="" required placeholder="Confirm Password">
                                                    <div class="invalid-feedback">Please provide a password.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container-login100-form-btn">
                                            <button class="login100-form-btn btn-primary" type="submit">
                                                Register
                                            </button>
                                        </div>
                                        <div class="text-center pt-3">
                                            <p class="text-dark mb-0">Already have account?<a href="/login"
                                                    class="text-primary ms-1">Sign In</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </div>
    </div>


    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="../admin/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../admin/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../admin/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="../admin/js/jquery.sparkline.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="../admin/js/show-password.min.js"></script>

    <!-- Sticky js -->
    <script src="../admin/js/sticky.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../admin/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="../admin/plugins/p-scroll/pscroll.js"></script>
    <script src="../admin/plugins/p-scroll/pscroll-1.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="../admin/plugins/select2/select2.full.min.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="../admin/plugins/sidemenu/sidemenu.js"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="../admin/js/index1.js"></script>

    <!-- Color Theme js -->
    <script src="../admin/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="../admin/js/custom.js"></script>
    <script src="../admin/js/form-validation.js"></script>
    @include('sweetalert::alert')

</body>

</html>
