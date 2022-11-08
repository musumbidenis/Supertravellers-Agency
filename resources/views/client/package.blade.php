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
                    <h2 package_name="{{ $package[0]->package_name }}" class="section-title text-left my-4">{{ $package[0]->package_name }}</h2>
                    <p>{!! $package[0]->description !!}</p>


                    <p><a id="book" class="btn btn-primary">Book Now</a>
                    </p>
                </div>


            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('#book').click(function(event) {
            event.preventDefault();
            var package_id = "<?php echo"{$package[0]->package_id}"?>"; 
            var package_name = "<?php echo"{$package[0]->package_name}"?>";
            var amount = "<?php echo"{$package[0]->amount}"?>"; 

            swal({
                    title: "Are you sure?",
                    text: "You're about to book for " + package_name +" Worth Kshs. " + amount + ".Click the Ok button to book!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        

                        //CORS
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        //Ajax request for booking
                        $.ajax({
                            url: '/booking/' + package_id,
                            type: 'post',
                            data: {
                                id: package_id,
                            },
                            success: function(response) {
                                swal({
                                    title: "Success",
                                    text: "Booking was successfull!",
                                    icon: "success",
                                }).then((confirmed) => {
                                    window.location.replace('/myBookings');
                                });

                            }
                        });
                    } else {
                        swal("Booking process cancelled!");
                    }
                });
        });
    </script>
@endsection
