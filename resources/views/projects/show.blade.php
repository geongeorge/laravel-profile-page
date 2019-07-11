@extends('layouts.main')

@section('title',$project->title)

@section('content')
  <h1>{{$project->title}}</h1>
  <p>
    {{ $project->description }}
  </p>

@if($project->tasks->count())
  <div class="">
    @foreach ($project->tasks as $task)
      <li>{{ $task->description }}</li>
    @endforeach
  </div>
@endif

  <a href="/projects/{{$project->id}}/edit">edit</a><br>

  <form action="/projects/{{$project->id}}" method="post">
    {{ method_field('DELETE')}}
    {{csrf_field()}}
    <button type="submit" name="button">Delete</button>
  </form>
@endsection
