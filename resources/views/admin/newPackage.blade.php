@extends('layouts.admin-main')
@section('header')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">New Package</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">New Package</li>
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
                    <h3 class="card-title">Add Package</h3>
                </div>
                <div class="card-body">
                    <form class="needs-validation" action="/packages" method="post"
                        novalidate enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="col-xl-6 mb-3">
                                <label>Package Name</label>
                                <input type="text" class="form-control" name="package_name"
                                    value="{{ old('package_name') }}" required>
                                <div class="invalid-feedback">Please provide a name.</div>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label>Package Type</label>
                                <select class="form-control select2" name="package_type" required>
                                    <option disabled selected value="">Select Package Type</option>
                                    <option value="Family Holiday">Family Holiday</option>
                                    <option value="Beach Holiday">Beach Holiday</option>
                                    <option value="Safari Tour">Safari Tour</option>
                                    <option value="Honeymoon">Honeymoon</option>
                                </select>
                                <div class="invalid-feedback">Please select a valid package type.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-6 mb-3">
                                <label>Destination</label>
                                <select class="form-control select2" name="destination" required>
                                    <option disabled selected value="">Select Destination</option>
                                    @foreach ($destinations as $destination)
                                        <option value={{ $destination->destination_id }}>
                                            {{ $destination->destination_name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Please select a valid destination.</div>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label>Amount</label>
                                <input type="number" class="form-control" name="amount" value="{{ old('amount') }}"
                                    required>
                                <div class="invalid-feedback">Please provide a numeric value.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-4">
                                <label>Package Description</label>
                                <textarea class="content" name="description" required></textarea>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label>Cover Image</label>
                                <input class="form-control" type="file" name="image_url">
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
    <!-- INTERNAL Form Validation JS -->
    <script src="../admin/js/form-validation.js"></script>
    <!-- INTERNAL WYSIWYG Editor JS -->
    <script src="../admin/plugins/wysiwyag/jquery.richtext.js "></script>
    <script src="../admin/plugins/wysiwyag/wysiwyag.js "></script>
@endsection
