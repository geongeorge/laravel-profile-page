<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Project;

class ProjectsController extends Controller
{
    //

    public function index() {

      // $projects = \App\Project::all();

      $projects = Project::all();

      return view('projects.index',[
        'projects'=> $projects
      ]);
    }

    public function create() {

      return view('projects.create');
    }

    public function store() {
      //return request()->all();

      $project = new Project();

      $project->title = request()->title;
      $project->description = request()->description;

      $project->save();

      return redirect('/projects');

    }

    public function show($id) {
      $project = Project::findOrFail($id);

      return view('projects.show',[
        'project'=> $project
      ]);
    }

    public function edit($id) {
      $project = Project::findOrFail($id);

      return view('projects.edit',[
        'project'=> $project
      ]);
    }

    public function update($id) {
      //return request()->all();

      $project = Project::findOrFail($id);

      $project->title = request()->title;
      $project->description = request()->description;

      $project->save();

      return redirect('/projects/'.$id);

    }

    public function destroy($id) {
      $project = Project::findOrFail($id);
      $project->delete();
      return redirect('/projects');
    }
}
