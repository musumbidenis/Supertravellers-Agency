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
