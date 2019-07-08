<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home() {
      $tasks = [
        'Make Project',
        'Learn Laravel',
        'Learn Nuxt'
      ];
      return view('pages.welcome',[
        'tasks' => $tasks
      ]);
    }

    public function about() {
      return view('pages.about');
    }

    public function contact() {
      return view('pages.contact');
    }
}
