@extends('backend.layouts.app')
@section('content')
<h2>Add Gallery Item</h2>
<form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="mb-3"><label>Title</label>
<input type="text" name="title" class="form-control">
</div>
<div class="mb-3"><label>Category</label>
<input type="text" name="category" class="form-control">
</div>
<div class="mb-3"><label>Image path</label>
<input type="file" name="image" class="form-control">
</div>
<div class="mb-3"><label>Order</label>
<input type="number" name="order" class="form-control">
</div>
<div class="mb-3"><label>Active</label><select name="status" class="form-control"><option value="1">Yes</option><option value="0">No</option></select></div>
<button class="btn btn-primary">Save</button></form>
@endsection