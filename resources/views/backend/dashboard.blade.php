@extends('backend.layouts.app')
@section('page_title', 'Dashboard')

@section('content')
    <h4 class="mb-4">Welcome back, {{ auth()->user()->name ?? 'Admin' }}!</h4>
    
    <div class="row">
        <!-- Services Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow-sm border-0 bg-primary text-white h-100">
                <div class="card-body d-flex align-items-center justify-content-between p-4">
                    <div>
                        <h6 class="text-uppercase text-white-50 fw-bold mb-1">Services</h6>
                        <h2 class="mb-0 fw-bold">{{ \App\Models\Service::count() }}</h2>
                    </div>
                    <i class="fa-solid fa-list fa-3x opacity-50"></i>
                </div>
            </div>
        </div>

        <!-- Inquiries Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow-sm border-0 bg-danger text-white h-100">
                <div class="card-body d-flex align-items-center justify-content-between p-4">
                    <div>
                        <h6 class="text-uppercase text-white-50 fw-bold mb-1">Inquiries</h6>
                        <h2 class="mb-0 fw-bold">{{ \App\Models\Inquiry::count() }}</h2>
                    </div>
                    <i class="fa-solid fa-envelope fa-3x opacity-50"></i>
                </div>
            </div>
        </div>

        <!-- Gallery Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow-sm border-0 bg-info text-white h-100">
                <div class="card-body d-flex align-items-center justify-content-between p-4">
                    <div>
                        <h6 class="text-uppercase text-white-50 fw-bold mb-1">Gallery Items</h6>
                        <h2 class="mb-0 fw-bold">{{ \App\Models\Gallery::count() }}</h2>
                    </div>
                    <i class="fa-solid fa-images fa-3x opacity-50"></i>
                </div>
            </div>
        </div>

        <!-- Team Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow-sm border-0 bg-warning text-white h-100">
                <div class="card-body d-flex align-items-center justify-content-between p-4">
                    <div>
                        <h6 class="text-uppercase text-white-50 fw-bold mb-1">Team Members</h6>
                        <h2 class="mb-0 fw-bold">{{ \App\Models\Team::count() }}</h2>
                    </div>
                    <i class="fa-solid fa-users fa-3x opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
@endsection