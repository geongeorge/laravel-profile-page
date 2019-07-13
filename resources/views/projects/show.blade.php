@extends('layouts.main')

@section('title',$project->title)

@section('content')
  {{ Breadcrumbs::render('project',$project) }}
  <h1>{{$project->title}}</h1>
  <p>
    {{ $project->description }}
  </p>

@if($project->tasks->count())
  <div class="">
    @foreach ($project->tasks as $task)
      <div>
        <form action="/tasks/{{ $task->id }}" method="post">
          {{ method_field('PATCH') }}
          @csrf
          <div class="field">
          <div class="control">
            <label class="checkbox">
              <input class="checkbox" type="checkbox" onChange="this.form.submit()" name="completed" {{$task->completed==0? "": "checked"}}>
              {{ $task->description }}
            </label>
          </div>
        </div>
        </form>

      </div>
    @endforeach
  </div>
@endif

 <section class="section">
  <a class="button is-light" href="/projects/{{$project->id}}/edit">edit</a><br>

  <form action="/projects/{{$project->id}}" method="post">
    {{ method_field('DELETE')}}
    {{csrf_field()}}
    <button type="submit" class="button is-text" name="button">Delete</button>
  </form>
</section>
@endsection
