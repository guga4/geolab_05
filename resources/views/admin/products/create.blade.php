@extends('admin.master')

@section('content')
<form action="{{ url('admin/products') }}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
  </div>
  <div class="form-group">
    <label for="name">Price</label>
    <input type="text" class="form-control" id="price" placeholder="Price" name="price">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" rows="3" name="description" id="description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile" name="image">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection