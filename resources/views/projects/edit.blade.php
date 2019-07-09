@extends('layouts.main')

@section('title','Projects')

@section('content')
  <h1>Edit Project</h1>

  <form action="/projects/{{$project->id}}" method="post">

    {{ method_field('PATCH')}}

    {{csrf_field()}}

    <input type="text" name="title" value="{{$project->title}}" size="60" placeholder="Title">
    <br>
    <textarea name="description" rows="8" cols="58">{{$project->description}}</textarea>
    <br>
    <br>
    <button type="submit" >Save project</button>

  </form>
@endsection
