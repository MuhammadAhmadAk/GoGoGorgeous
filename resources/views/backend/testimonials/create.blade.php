@extends('backend.layouts.app')
@section('content')
<div class="card">
    <div class="card-header bg-white py-3">
        <h4 class="mb-0 fw-bold">Add Testimonial</h4>
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

        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label class="form-label fw-semibold">Client Name <span class="text-danger">*</span></label>
                <input type="text" name="client_name" class="form-control" value="{{ old('client_name') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Client Role / City (e.g. Happy Client, Surrey BC)</label>
                <input type="text" name="client_role" class="form-control" value="{{ old('client_role') }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Review Text <span class="text-danger">*</span></label>
                <textarea name="review" class="form-control" rows="4" required>{{ old('review') }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Rating (1 to 5) <span class="text-danger">*</span></label>
                <input type="number" name="rating" min="1" max="5" class="form-control" value="{{ old('rating', 5) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Client Photo (Avatar)</label>
                <input type="file" name="avatar" class="form-control" accept="image/*">
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
                <i class="fa-solid fa-save me-1"></i> Save Testimonial
            </button>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary px-4 ms-2">Cancel</a>
        </form>
    </div>
</div>
@endsection
