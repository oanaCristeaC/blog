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

        $query->when($filters["search"] ?? false, function ($query, $search) {
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters["category"] ?? false, function ($query, $category) {

            $query->whereExists(function ($query) use ($category) {
                $query->from('categories')
                    ->whereColumn('categories.id', 'posts.category_id')
                    ->where('categories.slug', $category);
            });

//            $query->whereHas('category', function ($query) use ($category) {
//                $query->where('slug', $category);
//            });
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
