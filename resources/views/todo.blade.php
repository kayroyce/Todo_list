@extends('layouts.layout')


@section('content')
@if (\Session::has('msg'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('msg') !!}</li>
        </ul>
    </div>
@endif
<div>
    <button type="button" onclick="window.location='{{ route("todo.create") }}'"  class="btn btn-primary btn-lg">Add Todo</button>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Todo Item</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
      @php $i =0 @endphp
      @foreach($todolist as $todo)
    <tr>
      <th scope="row">{{$i+1}}1</th>
      <td>{{$todo->name}}</td>
      <td>time unavailable</td>
      <td>{{$todo->date}}</td>
    </tr>
    @endforeach
    {{-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> --}}
  </tbody>
</table>

</div>
@endsection
