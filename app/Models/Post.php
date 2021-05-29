<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post extends Model
{
  public static function find($postSlug) {

    $path = public_path("files/posts/{$postSlug}.html");

    if (! file_exists($path)) {
      throw new ModelNotFoundException();
    };

    return cache()->remember("posts.${postSlug}", now()->addMinutes(1), function() use ($path) {
      return file_get_contents($path);
    });
  }


	public static function getAll() {

		$postsInfo = File::files(public_path("files/posts"));

		$posts = array_map(function ($postInfo) {

			return file_get_contents($postInfo);

		}, $postsInfo);
	
		return $posts;
	}
}