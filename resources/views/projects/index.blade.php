@extends('layouts.main')

@section('title','Projects')

@section('content')
  <h1>Projects</h1>
  @foreach ($projects as $proj)
    <div class="">
          <h3>{{$proj->title}}</h3>
          <p>
            {{$proj->description}}
          </p>
          <hr>
    </div>
  @endforeach
@endsection
