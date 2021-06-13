<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Some fields are allowed to be inserted as mass assignment
    //protected $fillable= ['title', 'body', 'excerpt', 'slug'];

    protected $guarded = []; //@todo remove this

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
