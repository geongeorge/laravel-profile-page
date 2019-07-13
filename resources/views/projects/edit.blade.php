@extends('layouts.main')

@section('title','Projects')

@section('content')
  {{ Breadcrumbs::render('edit',$project) }}

  <h1>Edit Project</h1>

  <form action="/projects/{{$project->id}}" method="post">

    {{ method_field('PATCH')}}

    {{csrf_field()}}

    <input type="text" class="input" name="title" value="{{$project->title}}" size="60" placeholder="Title">
    <br>
    <textarea name="description" class="input" rows="8" cols="58">{{$project->description}}</textarea>
    <br>
    <br>
    <button class="button" type="submit" >Save project</button>

  </form>
@endsection
