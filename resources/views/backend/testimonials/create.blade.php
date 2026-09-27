@extends('backend.layouts.app')
@section('content')
<h2>Add Testimonial</h2>
<form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="mb-3"><label>Client name</label>
<input type="text" name="client_name" class="form-control">
</div>
<div class="mb-3"><label>Review text</label>
<textarea name="review_text" class="form-control" rows="3"></textarea>
</div>
<div class="mb-3"><label>Rating</label>
<input type="number" name="rating" class="form-control">
</div>
<div class="mb-3"><label>Image path</label>
<input type="file" name="avatar" class="form-control">
</div>
<div class="mb-3"><label>Order</label>
<input type="number" name="order" class="form-control">
</div>
<div class="mb-3"><label>Active</label><select name="status" class="form-control"><option value="1">Yes</option><option value="0">No</option></select></div>
<button class="btn btn-primary">Save</button></form>
@endsection
