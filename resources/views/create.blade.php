@extends('layouts.app')


@section('content')
<div class="container">
  <h2>Insert New Item</h2>
  <form action="/request" method="post">
    @csrf
    <div class="form-group">
      <label for="text">Text</label>
      <input type="text" class="form-control" id="text" name="text" placeholder="Enter Text">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <input type="text" class="form-control" id="body" name="body" placeholder="Enter Body">
    </div>
    <button type="submit" name="button" class="btn btn-primary">Submit</button>
  </form>
</div>


@endsection
