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
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Package</th>
                                    <th scope="col">Destination</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                @foreach ($myBookings as $booking)
                                    <input id="booking_id" type="text" value="{{ $booking->booking_id }}" hidden>
                                    <input id="package_name" type="text" value="{{ $booking->package_name }}" hidden>
                                    <tr>
                                        <td hidden>{{ $booking->booking_id }}</td>
                                        <th scope="row">{{ $i }}</th>
                                        <td>{{ $booking->package_name }}</td>
                                        <td>{{ $booking->destination_name }}</td>
                                        <td>{{ $booking->amount }}</td>
                                        <td style="text-transform: capitalize">{{ $booking->status }}</td>
                                        <td>
                                            @if ($booking->status == 'pending')
                                                <a class="cancel btn btn-danger btn-sm">Cancel</a>
                                            @endif
                                        </td>

                                    </tr>
                                    @php $i ++;  @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    @endif
    </div>
@endsection
@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('.cancel').click(function(event) {
            event.preventDefault();

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            swal({
                    title: "Are you sure?",
                    text: "You're about to cancel your " + data[1] +
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
                            url: '/booking/update/' + data[0],
                            type: 'post',
                            data: {
                                id: data[0],
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
