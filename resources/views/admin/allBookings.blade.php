@extends('layouts.admin-main')
@section('header')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Booking Details</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">Bookings</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bookings Table</h3>
                </div>
                <div class="card-body">
                    <livewire:bookings />
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        window.addEventListener('updateAlert', event => {

            swal({
                    title: "Are you sure?",
                    text: "You're about to update to update the booking status!This step is irreversible!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        var data = event.detail.message;

                        //CORS
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        //Ajax request for deleting
                        $.ajax({
                            url: 'bookings/' + data,
                            type: 'patch',
                            data: {
                                id: data,
                            },
                            success: function(response) {
                                swal({
                                    title: "Success",
                                    text: "Booking status updated successfully!",
                                    icon: "success",
                                }).then((confirmed) => {
                                    window.location.reload();
                                });

                            }
                        });
                    } else {
                        swal("Process cancelled!");
                    }
                });
        })
    </script>
    <script>
        window.addEventListener('showAlert', event => {

            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this record!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        var data = event.detail.message;

                        //CORS
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        //Ajax request for deleting
                        $.ajax({
                            url: 'bookings/' + data,
                            type: 'delete',
                            data: {
                                id: data,
                            },
                            success: function(response) {
                                swal({
                                    title: "Success",
                                    text: "Data was deleted successfully!",
                                    icon: "success",
                                }).then((confirmed) => {
                                    window.location.reload();
                                });

                            }
                        });
                    } else {
                        swal("Your record is safe!");
                    }
                });
        })
    </script>
@endsection
