@extends('backend.layouts.app')
@section('content')
<div class="d-flex justify-content-between mb-3"><h2>Testimonials</h2><a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">Add Testimonial</a></div>
<table class="table table-bordered"><thead><tr><th>ID</th><th>Title/Name</th><th>Actions</th></tr></thead><tbody>
@foreach($testimonials as $item)
<tr><td>{{ $item->id }}</td><td>{{ $item->title ?? $item->name ?? $item->client_name ?? $item->question }}</td>
<td><a href="{{ route('admin.testimonials.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
<form action="{{ route('admin.testimonials.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
@csrf @method('DELETE')<button class="btn btn-sm btn-danger">Delete</button></form></td></tr>
@endforeach
</tbody></table>
@endsection