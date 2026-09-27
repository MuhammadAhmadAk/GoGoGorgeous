@extends('backend.layouts.app')
@section('content')
<h2>Edit Testimonial</h2>
<form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
@csrf @method('PUT')
<div class="mb-3"><label>Client name</label>
<input type="text" name="client_name" class="form-control" value="{{ $testimonial->client_name }}">
</div>
<div class="mb-3"><label>Review text</label>
<textarea name="review_text" class="form-control" rows="3">{{ $testimonial->review_text }}</textarea>
</div>
<div class="mb-3"><label>Rating</label>
<input type="number" name="rating" class="form-control" value="{{ $testimonial->rating }}">
</div>
<div class="mb-3"><label>Image path</label>
<input type="file" name="avatar" class="form-control">
</div>
<div class="mb-3"><label>Order</label>
<input type="number" name="order" class="form-control" value="{{ $testimonial->order }}">
</div>
<div class="mb-3"><label>Active</label><select name="status" class="form-control"><option value="1" {{ $testimonial->status ? 'selected' : '' }}>Yes</option><option value="0" {{ !$testimonial->status ? 'selected' : '' }}>No</option></select></div>
<button class="btn btn-primary">Update</button></form>
@endsection
