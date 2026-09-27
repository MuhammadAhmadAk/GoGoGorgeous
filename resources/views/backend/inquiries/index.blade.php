@extends('backend.layouts.app')
@section('content')
    <h2>Inquiries</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Email</th>
                <th>Service</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inquiries as $item)
            <tr class="{{ $item->is_read ? '' : 'table-warning' }}">
                <td>{{ $item->created_at->format('Y-m-d H:i') }}</td>
                <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->service }}</td>
                <td>{{ $item->is_read ? 'Read' : 'Unread' }}</td>
                <td>
                    <a href="{{ route('admin.inquiries.show', $item->id) }}" class="btn btn-sm btn-info">View</a>
                    <form action="{{ route('admin.inquiries.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection