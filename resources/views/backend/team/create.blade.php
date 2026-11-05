@extends('backend.layouts.app')
@section('content')
<div class="card">
    <div class="card-header bg-white py-3">
        <h4 class="mb-0 fw-bold">Add Team Member</h4>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label class="form-label fw-semibold">Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Designation / Role <span class="text-danger">*</span></label>
                <input type="text" name="designation" class="form-control" value="{{ old('designation') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Photo</label>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Facebook URL</label>
                <input type="text" name="facebook_url" class="form-control" value="{{ old('facebook_url') }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Instagram URL</label>
                <input type="text" name="instagram_url" class="form-control" value="{{ old('instagram_url') }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Order</label>
                <input type="number" name="order" class="form-control" value="{{ old('order', 0) }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Status</label>
                <select name="status" class="form-control">
                    <option value="1" {{ old('status', 1) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status') === '0' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary px-4">
                <i class="fa-solid fa-save me-1"></i> Save Team Member
            </button>
            <a href="{{ route('admin.team.index') }}" class="btn btn-secondary px-4 ms-2">Cancel</a>
        </form>
    </div>
</div>
@endsection
