@extends('layouts.admin-main')
@section('header')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">New Destination</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">New Destination</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Travel Destination</h3>
                </div>
                <div class="card-body">
                    <form class="needs-validation"  action="/destinations" method="post" novalidate>
                        {{ csrf_field() }}
                        
                        <div class="form-row">
                            <div class="col-xl-6 mb-3">
                                <label>Destination Name</label>
                                <input type="text" class="form-control" name="destination_name" value="{{ old('destination_name') }}" required>
                                <div class="invalid-feedback">Please provide a name.</div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="../admin/js/form-validation.js"></script>
@endsection
