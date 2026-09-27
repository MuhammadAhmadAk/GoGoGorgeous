@extends('backend.layouts.app')
@section('content')
<h2>Add Team Member</h2>
<form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="mb-3"><label>Name</label>
<input type="text" name="name" class="form-control">
</div>
<div class="mb-3"><label>Position</label>
<input type="text" name="position" class="form-control">
</div>
<div class="mb-3"><label>Image path</label>
<input type="file" name="image" class="form-control">
</div>
<div class="mb-3"><label>Bio</label>
<textarea name="bio" class="form-control" rows="3"></textarea>
</div>
<div class="mb-3"><label>Facebook url</label>
<input type="text" name="facebook_url" class="form-control">
</div>
<div class="mb-3"><label>Twitter url</label>
<input type="text" name="twitter_url" class="form-control">
</div>
<div class="mb-3"><label>Instagram url</label>
<input type="text" name="instagram_url" class="form-control">
</div>
<div class="mb-3"><label>Order</label>
<input type="number" name="order" class="form-control">
</div>
<div class="mb-3"><label>Active</label><select name="status" class="form-control"><option value="1">Yes</option><option value="0">No</option></select></div>
<button class="btn btn-primary">Save</button></form>
@endsection