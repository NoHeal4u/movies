<!DOCTYPE html>
<html lang="en">
  
@include('/layouts/partials.header')
  <body>

@include('/layouts/partials.navbar') 
 

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Filmovi blog</h1>
        <p class="lead blog-description">Mesto za sve vase filmove.</p>
      </div>
    </div>

    <div class="container">

      <div class="row">

      @yield('content')
       

      

      </div><!-- /.row -->

    </div><!-- /.container -->

    @include('/layouts/partials.footer')


   
  </body>
</html>
