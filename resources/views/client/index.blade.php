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
                                                <option disabled selected value="">Destination</option>
                                                @foreach ($destinations as $destination)
                                                    <option value={{ $destination->destination_id }}>
                                                        {{ $destination->destination_name }}</option>
                                                @endforeach
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
    <div class="untree_co-section testimonial-section mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h2 class="section-title text-center mb-5">Testimonials</h2>

                    <div class="owl-single owl-carousel no-nav">
                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Adam Aderson</h3>
                            <blockquote>
                                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                        </div>

                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Lukas Devlin</h3>
                            <blockquote>
                                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                        </div>

                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="images/person_4.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Kayla Bryant</h3>
                            <blockquote>
                                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
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
                    <p>Let us take you to your dream destinations. Checkout some of the most popular packages we offers. We
                        bet you'll love it!</p>
                </div>
            </div>
            <div class="row">
                @foreach ($packages as $package)
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="media-1">
                            <a href="#" class="d-block mb-3"><img src="storage/images/{{ $package->image_url }}"
                                    alt="Image" class="img-fluid"></a>
                            <span class="d-flex align-items-center loc mb-2">
                                <span class="icon-room mr-3"></span>
                                <span>{{ $package->destination_name }}</span>
                            </span>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3><a href="#">{{ $package->package_name }}</a></h3>
                                    <div class="price ml-auto">
                                        <span>Kshs. {{ $package->amount }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="../client/js/typed.js"></script>
    <script>
        $(function() {
            var slides = $('.slides'),
                images = slides.find('img');

            images.each(function(i) {
                $(this).attr('data-id', i + 1);
            })

            var typed = new Typed('.typed-words', {
                strings: ["Maasai Mara.", " Diani.", " Mombasa.", " Amboseli.", " Nairobi."],
                typeSpeed: 80,
                backSpeed: 80,
                backDelay: 4000,
                startDelay: 1000,
                loop: true,
                showCursor: true,
                preStringTyped: (arrayPos, self) => {
                    arrayPos++;
                    console.log(arrayPos);
                    $('.slides img').removeClass('active');
                    $('.slides img[data-id="' + arrayPos + '"]').addClass('active');
                }

            });
        })
    </script>
@endsection
