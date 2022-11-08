@extends('layouts.admin-main')
@section('header')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">New User</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">New User</li>
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
                    <h3 class="card-title">Add User</h3>
                </div>
                <div class="card-body">
                    <form class="needs-validation" action="/users" method="post" novalidate>
                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="col-xl-6 mb-3">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}"
                                    required>
                                <div class="invalid-feedback">Please provide a name.</div>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label>Surname</label>
                                <input type="text" class="form-control" name="surname" value="{{ old('surname') }}"
                                    required>
                                <div class="invalid-feedback">Please provide a name.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-6 mb-3">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                    required>
                                <div class="invalid-feedback">Please provide a valid email address.</div>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label>Phone Number</label>
                                </span>
                                <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}"
                                    required placeholder="Phone, e.g 0712345678"
                                    pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$">
                                <div class="invalid-feedback">Please provide a phone number in the requested format.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-6 mb-3">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                                    required>
                                <div class="invalid-feedback">Please provide a password.</div>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label>Role</label>
                                <select class="form-control select2" name="role" required>
                                    <option disabled selected value="">Select Role</option>
                                    <option value="administrator">Administrator</option>
                                    <option value="receptionist">Receptionist</option>
                                </select>
                                <div class="invalid-feedback">Please select a valid role.</div>
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
