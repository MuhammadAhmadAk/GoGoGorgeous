@extends('backend.layouts.app')
@section('content')
<div class="d-flex justify-content-between mb-3"><h2>Gallery Items</h2><a href="{{ route('admin.gallery.create') }}" class="btn btn-primary">Add Gallery Item</a></div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title/Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
@foreach($galleries as $item)
<tr>
    <td>{{ $item->id }}</td>
    <td><img src="{{ $item->image_url }}" width="80" style="border-radius: 5px; object-fit: cover; height: 50px;"></td>
    <td>{{ $item->title ?? $item->name ?? $item->client_name ?? $item->question }}</td>
    <td>
        <a href="{{ route('admin.gallery.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
        <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
            @csrf @method('DELETE')
            <button class="btn btn-sm btn-danger">Delete</button>
        </form>
    </td>
</tr>
@endforeach
</tbody></table>
@endsection