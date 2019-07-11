@extends('layouts.main')

@section('title','Projects')

@section('content')
  <h1>Projects</h1>
  <a class="button is-small is-success" href="/projects/create"><small>create</small></a>
  <br>
  <br>
  @foreach ($projects as $proj)
    <div class="has-text-left box">
        <a href="/projects/{{$proj->id}}">
          <h3>{{$proj->title}}</h3>
        </a>
          <p>
            {{$proj->description}}
          </p>
    </div>
  @endforeach
@endsection
