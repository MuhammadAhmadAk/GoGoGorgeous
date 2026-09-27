@extends('backend.layouts.app')
@section('content')
    <h2>Add Service</h2>
    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Category / Tag (e.g. HAIR CARE, SKIN CARE)</label>
            <input type="text" name="category" class="form-control">
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label>Service Image (Before/After or Main Photo)</label>
            <input type="file" name="featured_image" class="form-control">
        </div>
        <div class="mb-3">
            <label>Price</label>
            <input type="number" step="0.01" name="price" class="form-control">
        </div>
        <div class="mb-3">
            <label>Order</label>
            <input type="number" name="order" class="form-control" value="0">
        </div>
        <div class="mb-3">
            <label>Active</label>
            <select name="status" class="form-control">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <button class="btn btn-primary">Save</button>
    </form>
@endsection