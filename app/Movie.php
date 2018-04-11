<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{	
	public $timestamps = false ;
    protected $fillable = ['title','genre','director','storyline','production_year'];

    public function comments() {
    	return $this->hasMany('App\Comment');
    }
}
