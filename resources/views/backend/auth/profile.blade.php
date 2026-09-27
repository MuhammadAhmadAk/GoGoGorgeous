@extends('backend.layouts.app')
@section('page_title', 'My Profile')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>My Profile</h2>
    </div>

    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('admin.profile.update') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}" required>
                </div>
                
                <h5 class="mt-4 mb-3">Change Password</h5>
                <div class="mb-3">
                    <label class="form-label">Current Password (leave blank to keep current)</label>
                    <input type="password" name="current_password" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">New Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm New Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary mt-2">
                    <i class="fa-solid fa-save me-2"></i> Update Profile
                </button>
            </form>
        </div>
    </div>
@endsection
