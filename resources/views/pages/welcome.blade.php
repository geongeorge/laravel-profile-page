@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="title m-b-md">
    Geon George
</div>
<div class="text-left">
  <h3>Tasks:</h3>
  <ul>
    @foreach($tasks as $task)
      <li> {{ $task }} </li>
    @endforeach
  </ul>
</div>

@endsection
