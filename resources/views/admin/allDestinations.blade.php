@extends('layouts.admin-main')
@section('header')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Destination Details</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">Destinations</li>
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
                    <h3 class="card-title">Destinations Table</h3>
                </div>
                <div class="card-body">
                    <livewire:destinations />
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                            url: 'destinations/' + data,
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
