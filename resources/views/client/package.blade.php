@extends('layouts.client-main')
@section('content')
    <div class="hero hero-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="intro-wrap">
                        <h1 class="mb-0">{{ $package[0]->package_type }}</h1>
                        <p class="text-white">Explore the Best With Supertravellers Today.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-between align-items-center">

                <div class="col-lg-12">
                    <img style="height: 270px;width:500px;" src="../images/{{ $package[0]->image_url }}" alt="Image"
                        class="img-fluid rounded-20 mx-auto d-block">
                        <h2 class="section-title text-left my-4">{{ $package[0]->package_name }}</h2>
                    <p>{!! $package[0]->description !!}</p>


                    <p><a href="/book/{{ $package[0]->package_id }}" class="btn btn-primary">Book Now</a></p>
                </div>

               
            </div>
        </div>
    </div>
@endsection
