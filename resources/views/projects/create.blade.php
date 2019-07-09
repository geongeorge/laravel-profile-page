@extends('layouts.main')

@section('title','Projects')

@section('content')
  <h1>Create Project</h1>

  <form action="/projects" method="post">

    {{csrf_field()}}

    <input type="text" name="title" value="" size="60" placeholder="Title">
    <br>
    <textarea name="description" rows="8" cols="58">My project description
    </textarea>
    <br>
    <br>
    <button type="submit" >Create project</button>

  </form>
@endsection
