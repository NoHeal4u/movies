@extends('layouts.master')

@section('title')
	Create new movie
@endsection


@section('content')
	<h2>Dodaj Film: </h2>
	

	<form method="POST" action="/movies">
		{{csrf_field()}}

		<div class="form-group">
			<label for="title">Naziv filma</label>
			<input id="title" type="text" name="title" class="form-control">
			@include('layouts.partials.error-message',['fieldTitle'=>'title']) 
		</div>

		<div class="form-group">
			<label for="genre">Zanr filma</label>
			<input id="genre" type="text" name="genre" class="form-control">
			@include('layouts.partials.error-message',['fieldTitle'=>'genre']) 
		</div>

		<div class="form-group">
			<label for="director">Reziser filma</label>
			<input id="director" type="text" name="director" class="form-control">
			@include('layouts.partials.error-message',['fieldTitle'=>'director']) 
		</div>

		<div class="form-group">
			<label for="storyline">Kratak opis radnje filma</label>
			<input id="storyline" type="text" name="storyline" class="form-control">
			@include('layouts.partials.error-message',['fieldTitle'=>'storyline']) 
		</div>

		<div class="form-group">
			<label for="production_year">Godina snimanja</label>
			<input id="production_year" type="number" name="production_year" class="form-control">
			@include('layouts.partials.error-message',['fieldTitle'=>'production_year']) 
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
			
		</div>
	</form>
@endsection