<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Everything is Protected from mass assignment
    // protected $guarded = ['*'];

    // Nothing is protected from mass assignment
    // protected $guarded = [];

    // Some fields are protected from mass assignment
    //protected $guarded = ['id'];

    // Some fields are allowed to be inserted as mass assignment
     protected $fillable= ['title', 'body', 'excerpt'];
}
