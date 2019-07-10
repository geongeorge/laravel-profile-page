<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    // protected $fillable = [
    //   'title',
    //   'description'
    // ];

    protected $guarded = []; //make sure you dont blindly input data
}
