@extends('layouts.main')

@section('title','Projects')

@section('content')
  <h1>Projects</h1>
  <a href="/projects/create"><small>create</small></a>
  @foreach ($projects as $proj)
    <div class="">
        <a href="/projects/{{$proj->id}}">
          <h3>{{$proj->title}}</h3>
        </a>
          <p>
            {{$proj->description}}
          </p>
          <hr>
    </div>
  @endforeach
@endsection
