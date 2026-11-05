@extends('backend.layouts.app')
@section('content')
<div class="card">
    <div class="card-header bg-white py-3">
        <h4 class="mb-0 fw-bold">Edit Team Member</h4>
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

        <form action="{{ route('admin.team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label fw-semibold">Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $team->name) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Designation / Role <span class="text-danger">*</span></label>
                <input type="text" name="designation" class="form-control" value="{{ old('designation', $team->designation ?? $team->position ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Photo</label>
                @if($team->image_path)
                    <div class="mb-2">
                        <img src="{{ $team->image_url }}" width="60" height="60" class="rounded-circle object-fit-cover border" alt="Photo">
                    </div>
                @endif
                <input type="file" name="image" class="form-control" accept="image/*">
                <small class="text-muted">Leave empty to keep current photo</small>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Facebook URL</label>
                <input type="text" name="facebook_url" class="form-control" value="{{ old('facebook_url', $team->facebook_url) }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Instagram URL</label>
                <input type="text" name="instagram_url" class="form-control" value="{{ old('instagram_url', $team->instagram_url) }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Order</label>
                <input type="number" name="order" class="form-control" value="{{ old('order', $team->order) }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Status</label>
                <select name="status" class="form-control">
                    <option value="1" {{ old('status', $team->status) ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ !old('status', $team->status) ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary px-4">
                <i class="fa-solid fa-save me-1"></i> Update Team Member
            </button>
            <a href="{{ route('admin.team.index') }}" class="btn btn-secondary px-4 ms-2">Cancel</a>
        </form>
    </div>
</div>
@endsection
