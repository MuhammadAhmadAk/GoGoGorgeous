@extends('backend.layouts.app')
@section('content')
<h2>Add FAQ</h2>
<form action="{{ route('admin.faqs.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="mb-3"><label>Question</label>
<input type="text" name="question" class="form-control">
</div>
<div class="mb-3"><label>Answer</label>
<textarea name="answer" class="form-control" rows="3"></textarea>
</div>
<div class="mb-3"><label>Order</label>
<input type="number" name="order" class="form-control">
</div>
<div class="mb-3"><label>Active</label><select name="status" class="form-control"><option value="1">Yes</option><option value="0">No</option></select></div>
<button class="btn btn-primary">Save</button></form>
@endsection