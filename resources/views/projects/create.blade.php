@extends('layouts.main')

@section('title','Projects')

@section('content')
  <h1>Create Project</h1>

  <form action="/projects" method="post">

    {{csrf_field()}}

    <input type="text" class="input {{$errors->has('title')? 'is-danger' : ''}}" name="title" size="60" placeholder="Title" value="{{old('title')}}">
    <br>
    <textarea class="input {{$errors->has('description')? 'is-danger' : ''}}" name="description" rows="8" placeholder="My project description" cols="58" >{{old('description')}}</textarea>
    <br>
    <br>
    <button class="button" type="submit" >Create project</button>

  </form>

@if($errors->any())
  <div class='notification is-danger' style="margin-top: 20px;">
    @foreach ($errors->all() as $err)
      <p>{{ $err }}</p>
    @endforeach
  </div>
@endif

@endsection
