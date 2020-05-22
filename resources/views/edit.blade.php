@extends('layouts.app')


@section('content')
<div class="container">
  <h2>Edit Item</h2>
  <form action="/request/{{ $item->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="text">Text</label>
      <input type="text" class="form-control" id="text" name="text" placeholder="Enter Text" value="{{ $item->text }}">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <input type="text" class="form-control" id="body" name="body" placeholder="Enter Body" value="{{ $item->body }}">
    </div>
    <button type="submit" name="button" class="btn btn-primary">Submit</button>
  </form>
</div>


@endsection
