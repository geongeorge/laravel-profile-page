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
}
