@extends('backend.layouts.app')
@section('content')
    <h2>View Inquiry</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $inquiry->first_name }} {{ $inquiry->last_name }}</p>
            <p><strong>Email:</strong> {{ $inquiry->email }}</p>
            <p><strong>Phone:</strong> {{ $inquiry->phone }}</p>
            <p><strong>Service:</strong> {{ $inquiry->service }}</p>
            <p><strong>Message:</strong><br> {{ nl2br($inquiry->message) }}</p>
        </div>
    </div>
    <a href="{{ route('admin.inquiries.index') }}" class="btn btn-secondary mt-3">Back</a>
    @if(!$inquiry->is_read)
    <form action="{{ route('admin.inquiries.read', $inquiry->id) }}" method="POST" class="d-inline mt-3">
        @csrf
        <button class="btn btn-success">Mark as Read</button>
    </form>
    @endif
@endsection