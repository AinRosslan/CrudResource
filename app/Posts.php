<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['nickname','parent_name','gender','dob'];
    protected $dates = ['created_at', 'update_at'];
}
