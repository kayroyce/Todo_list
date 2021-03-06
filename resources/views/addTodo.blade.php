@extends('layouts.layout')


@section('content')

<form method="post" action="{{ route("todo.store") }}" >
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Todo Item</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Date</label>
      <input type="date" class="form-control" name="date" id="exampleInputPassword1">
    </div>
    {{-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection

