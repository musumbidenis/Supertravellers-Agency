@extends('layouts.client-main')
@section('content')
    <div class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="intro-wrap">
                        <h1 class="mb-5"><span class="d-block">Enjoy Your</span> Vacation In <span
                                class="typed-words"></span></h1>

                        <div class="row">
                            <div class="col-12">
                                <form class="form">
                                    <div class="row mb-2">
                                        <div class="col-sm-12 col-md-12 mb-3 mb-lg-0 col-lg-12">
                                            <select name="" id="" class="form-control custom-select">
                                                <option value="">Destination</option>
                                                <option value="">Peru</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                                            <input type="submit" class="btn btn-primary btn-block" value="Search">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="slides">
                        <img src="../client/images/hero-slider-1.jpg" alt="Image" class="img-fluid active">
                        <img src="../client/images/hero-slider-2.jpg" alt="Image" class="img-fluid">
                        <img src="../client/images/hero-slider-3.jpg" alt="Image" class="img-fluid">
                        <img src="../client/images/hero-slider-4.jpg" alt="Image" class="img-fluid">
                        <img src="../client/images/hero-slider-5.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 class="section-title text-center mb-3">Our Packages</h2>
                    <p>Super Travellers Agency offers the best curated packages in the market today. Check
                        out our various packages and we'll surely not disappoint you.
                    </p>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-lg-4 order-lg-1">
                    <div class="h-100">
                        <div class="frame h-100">
                            <div class="feature-img-bg h-100"
                                style="background-image: url('../client/images/hero-slider-1.jpg');"></div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1">

                    <div class="feature-1 d-md-flex">
                        <div class="align-self-center">
                            <span class="fas fa-users display-4 text-primary"></span>
                            <h3>Family Holidays</h3>
                            <p class="mb-0">Relax with family and friends with our Family Holiday offers
                            </p>
                        </div>
                    </div>

                    <div class="feature-1 ">
                        <div class="align-self-center">
                            <span class="fas fa-umbrella-beach display-4 text-primary"></span>
                            <h3>Beach Holidays</h3>
                            <p class="mb-0">Take some time off with our Beach Holiday offers.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3">

                    <div class="feature-1 d-md-flex">
                        <div class="align-self-center">
                            <span class="fas fa-paw display-4 text-primary"></span>
                            <h3>Safari Tour</h3>
                            <p class="mb-0">Take some time off with our unbeatable Safari Tour offers.
                            </p>
                        </div>
                    </div>

                    <div class="feature-1 d-md-flex">
                        <div class="align-self-center">
                            <span class="fas fa-heart display-4 text-primary"></span>
                            <h3>Honeymoon Packages</h3>
                            <p class="mb-0">Celebrate your marriage with our honeymoon offers.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6">
                    <h2 class="section-title text-center mb-3">Popular Packages</h2>
                    <p>Let us take you to your dream destinations. Checkout some of the most popular packages we offers. We bet you'll love it!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img src="../client/images/hero-slider-1.jpg"
                                alt="Image" class="img-fluid"></a>
                        <span class="d-flex align-items-center loc mb-2">
                            <span class="icon-room mr-3"></span>
                            <span>Italy</span>
                        </span>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">Rialto Mountains</a></h3>
                                <div class="price ml-auto">
                                    <span>$520.00</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img src="../client/images/hero-slider-2.jpg"
                                alt="Image" class="img-fluid"></a>
                        <span class="d-flex align-items-center loc mb-2">
                            <span class="icon-room mr-3"></span>
                            <span>United States</span>
                        </span>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">San Francisco</a></h3>
                                <div class="price ml-auto">
                                    <span>$520.00</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img src="../client/images/hero-slider-3.jpg"
                                alt="Image" class="img-fluid"></a>
                        <span class="d-flex align-items-center loc mb-2">
                            <span class="icon-room mr-3"></span>
                            <span>Malaysia</span>
                        </span>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">Perhentian Islands</a></h3>
                                <div class="price ml-auto">
                                    <span>$750.00</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img src="../client/images/hero-slider-4.jpg"
                                alt="Image" class="img-fluid"></a>

                        <span class="d-flex align-items-center loc mb-2">
                            <span class="icon-room mr-3"></span>
                            <span>Switzerland</span>
                        </span>

                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">Lake Thun</a></h3>
                                <div class="price ml-auto">
                                    <span>$520.00</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
