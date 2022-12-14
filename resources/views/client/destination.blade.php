@extends('layouts.client-main')
@section('content')
    <div class="hero hero-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="intro-wrap">
                        @if ($packages->isEmpty())
                            <h1 class="mb-0">Supertravellers</h1>
                        @else
                            <h1 class="mb-0">Destination {{ $packages[0]->destination_name }}</h1>
                        @endif
                        <p class="text-white">Explore the Best With Supertravellers Today.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="untree_co-section">
        @if ($packages->isEmpty())
            <div class="container">
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Message</h5>
                        <p class="card-text">There are no packages currently for this destination.</p>
                    </div>
                </div>
            </div>
        @else
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-6">
                        <h2 class="section-title text-center mb-3">{{ $packages[0]->destination_name }} Packages</h2>
                        <p>Let us take you to your dream destinations. Checkout the packages we offer. We bet you'll love
                            it!
                        </p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($packages as $item)
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="media-1"><img style="height: 270px;width:500px;"
                                    src="../images/{{ $item->image_url }}" alt="Image" class="img-fluid">
                                <span class="d-flex align-items-center loc my-2">
                                    <span class="icon-room mr-3"></span>
                                    <span>{{ $item->destination_name }}</span>
                                </span>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h3><a href="/getPackage/{{ $item->package_id }}">{{ $item->package_name }}</a></h3>
                                        <div class="price ml-auto">
                                            <span>Kshs. {{ $item->amount }}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection
