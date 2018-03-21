<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public $directory = "images/";
	protected $fillable = ['title', 'content', 'path'];

	public function scopeLatest($query){
		return $query->orderBy('id', 'desc')->get();
	}

	public function getPathAttribute($value){
		return $this->directory . $value;
	}

}
