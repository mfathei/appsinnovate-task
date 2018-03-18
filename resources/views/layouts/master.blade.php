

@include ('layouts.header')

  <body>

@include ('layouts.partials.nav')

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">Appsinnovate News</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
        <div class="btn btn-primary">Add News</div>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          @yield ('content')

        </div><!-- /.blog-main -->
          
        @include ('layouts.partials.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->

    @include ('layouts.footer')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    @yield ('scripts')


  </body>
</html>
