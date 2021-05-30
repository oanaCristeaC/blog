<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post extends Model
{
  public $title;
  public $slug;
  public $body;
  public $date;
  public $excerpt;

  public function __construct ($title, $slug, $body, $date, $excerpt){
    $this->title = $title;
    $this->slug = $slug;
    $this->body = $body;
    $this->date = $date;
    $this->excerpt = $excerpt;
  }

  public static function find($postSlug) {

    return static::getAll()->firstWhere('slug', $postSlug);
  }


	public static function getAll() {
	
		return collect(File::files(public_path("files/posts/")))
    ->map(function($file){
        return YamlFrontMatter::parseFile($file);
    })
    ->map(function ($document){
        return new Post($document->title, $document->slug, $document->body(), $document->date, $document->excerpt);
});
	}
}