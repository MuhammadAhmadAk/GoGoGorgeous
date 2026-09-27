@extends('backend.layouts.app')
@section('content')
    <h2>Edit Service</h2>
    <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $service->title }}" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="3">{{ $service->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Icon Image (Leave blank to keep current)</label>
            <input type="file" name="icon_image" class="form-control">
            @if($service->icon_image)
                <img src="{{ $service->icon_url }}" width="50" class="mt-2">
            @endif
        </div>
        <div class="mb-3">
            <label>Price</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ $service->price }}">
        </div>
        <div class="mb-3">
            <label>Order</label>
            <input type="number" name="order" class="form-control" value="{{ $service->order }}">
        </div>
        <div class="mb-3">
            <label>Active</label>
            <select name="status" class="form-control">
                <option value="1" {{ $service->status ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$service->status ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
@endsection