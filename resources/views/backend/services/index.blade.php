@extends('backend.layouts.app')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Services</h2>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Add Service</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Service Image</th>
                <th>Title</th>
                <th>Price</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $item)
            <tr>
                <td><img src="{{ $item->featured_image_url }}" width="80" style="border-radius: 5px; object-fit: cover; height: 50px;"></td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a href="{{ route('admin.services.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.services.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
