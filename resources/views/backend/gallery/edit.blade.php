@extends('backend.layouts.app')
@section('content')
<h2>Edit Gallery Item</h2>
<form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
@csrf @method('PUT')
<div class="mb-3"><label>Title</label>
<input type="text" name="title" class="form-control" value="{{ $gallery->title }}">
</div>
<div class="mb-3"><label>Category</label>
<input type="text" name="category" class="form-control" value="{{ $gallery->category }}">
</div>
<div class="mb-3"><label>Image path</label>
<input type="file" name="image" class="form-control">
</div>
<div class="mb-3"><label>Order</label>
<input type="number" name="order" class="form-control" value="{{ $gallery->order }}">
</div>
<div class="mb-3"><label>Active</label><select name="status" class="form-control"><option value="1" {{ $gallery->status ? 'selected' : '' }}>Yes</option><option value="0" {{ !$gallery->status ? 'selected' : '' }}>No</option></select></div>
<button class="btn btn-primary">Update</button></form>
@endsection