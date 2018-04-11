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
            

             @if(count($movie->comments)) 

  <form method="POST" action="{{route('comments-movie',['movie_id'=>$movie->id])}}">

                  {{csrf_field()}}

    <div class="form-group">
      <label for="title"> Dodaj komentar </label>
      <input id="text" type="text" name="text" class="form-control">
      @include('layouts.partials.error-message',['fieldTitle'=>'text']) 
    </div>

    

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
      
    </div>
  </form>



            <hr/>
            <h4>Comments</h4>
            <ul class="list-unstyled" >
              @foreach($movie->comments as $comment)
                <li>
                  <p>{{ $comment->text }}</p>
                  <p>Postavljeno: {{ $comment->created_at }}</p>
                </li>
              @endforeach
            </ul>
            @endif


        </div>
        </div>
        
      
      @endsection


    