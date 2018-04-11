@extends('layouts.master')

@section('title')
	Filmovi
@endsection

@section('content')

		<ul>
          @foreach($movies as $movie)
            <li>
                <a >{{$movie->title}}</a>
                <p>{{$movie->storyline}}</p>
            </li>
          @endforeach
        </ul>

@endsection




      

