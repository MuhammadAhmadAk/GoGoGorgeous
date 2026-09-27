@extends('backend.layouts.app')
@section('content')
<h2>Edit FAQ</h2>
<form action="{{ route('admin.faqs.update', $faq->id) }}" method="POST" enctype="multipart/form-data">
@csrf @method('PUT')
<div class="mb-3"><label>Question</label>
<input type="text" name="question" class="form-control" value="{{ $faq->question }}">
</div>
<div class="mb-3"><label>Answer</label>
<textarea name="answer" class="form-control" rows="3">{{ $faq->answer }}</textarea>
</div>
<div class="mb-3"><label>Order</label>
<input type="number" name="order" class="form-control" value="{{ $faq->order }}">
</div>
<div class="mb-3"><label>Active</label><select name="status" class="form-control"><option value="1" {{ $faq->status ? 'selected' : '' }}>Yes</option><option value="0" {{ !$faq->status ? 'selected' : '' }}>No</option></select></div>
<button class="btn btn-primary">Update</button></form>
@endsection