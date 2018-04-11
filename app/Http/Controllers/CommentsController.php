<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movie;

class CommentsController extends Controller
{	
	public function store($movieId)
	{	
    	$movie = Movie::find($movieId);

    	$this->validate(request(),['text'=>'required|min:15']);
    	
    	$movie->comments()->create(request()->all()); //laravel kaci id posta na id commenta

    	return redirect()->back();
    }
}
