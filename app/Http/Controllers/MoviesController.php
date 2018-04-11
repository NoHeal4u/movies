<?php

namespace App\Http\Controllers;
use App\Movie;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
     public function index()
    {
    	$movies = Movie::all();

    	return view('movies.index', compact(['movies']));
    }

    public function show($id)
    {
    	$movie = Movie::with('comments')->find($id);
       

    	return view('movies.show', compact(['movie']));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store()
    {
        
        $this->validate(request(),['title'=>'required',
                                   'genre'=>'required',
                                   'director'=>'required',
                                   'storyline'=>'required',
                                   'production_year'=>'required']); //validacija za korektan unos
       
        Movie::create(request()->all());

        return redirect('/movies');
    }
}
