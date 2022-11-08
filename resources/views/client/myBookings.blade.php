@extends('layouts.client-main')
@section('content')
    <div class="hero hero-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="intro-wrap">
                        <h1 class="mb-0">My Bookings</h1>
                        <p class="text-white">Explore the Best With Supertravellers Today.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="untree_co-section">
        @if ($myBookings->isEmpty())
            <div class="container">
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Message</h5>
                        <p class="card-text">You currently have no bookings with us.</p>
                    </div>
                </div>
            </div>
        @else
            <div class="container">
                @foreach ($myBookings as $booking)
                    <div class="card mt-3">
                        <div class="card-header">
                            <input id="booking_id" type="text" value="{{ $booking->booking_id }}" hidden>
                            <input id="package_name" type="text" value="{{ $booking->package_name }}" hidden>
                            {{ $booking->package_type }} - {{ $booking->destination_name }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $booking->package_name }} - Kshs. {{ $booking->amount }}</h5>
                            <p class="card-text">{{ $booking->Amount }}</p>
                            <a class="cancel btn btn-danger">Cancel</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('.cancel').click(function(event) {
            event.preventDefault();
            var booking_id = document.getElementById("booking_id").value;
            var package_name = document.getElementById("package_name").value;

            swal({
                    title: "Are you sure?",
                    text: "You're about to cancel your " + package_name +
                        " booking!",
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
                            url: '/booking/update/' + booking_id,
                            type: 'post',
                            data: {
                                id: booking_id,
                            },
                            success: function(response) {
                                swal({
                                    title: "Success",
                                    text: "Booking cancellation was successfull!",
                                    icon: "success",
                                }).then((confirmed) => {
                                    window.location.reload();
                                });

                            }
                        });
                    } else {
                        swal("Cancellation process stopped!");
                    }
                });
        });
    </script>
@endsection
