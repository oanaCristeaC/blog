<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Some fields are allowed to be inserted as mass assignment
    //protected $fillable= ['title', 'body', 'excerpt', 'slug'];

    protected $guarded = []; //@todo remove this

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters["search"] ?? false, function($query, $serach) {
            $query->where('title', 'like', '%' . $serach . '%')
                ->orWhere('body', 'like', '%' . $serach . '%');
        });

    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
