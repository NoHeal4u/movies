@extends('.layouts.master')

		@section('title')

         <h2 class="blog-post-title">{{$movie->title}}</h2>


          @endsection



          @section('content')

          <div class="col-sm-8 blog-main">
       		<div class="blog-post">


            <p class="blog-post-meta">Zanr filma: {{$movie->genre}}</p>
            <p class="blog-post-meta">Reziser filma: {{$movie->director}}</p>
            <p class="blog-post-meta">Kratak uvid u zaplet: {{$movie->storyline}}</p>
            <p class="blog-post-meta">Godina snimanja: {{$movie->production_year}}</p>
   
        </div>
        </div>
        
      
      @endsection


    