<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Blog Prototype</title>
    {{ HTML::style('css/layout.css') }}
    {{ HTML::style('css/post.css') }}
    {{ HTML::script('js/modernizr.js') }}
  </head>
  <body>
  <div class="row">
    <div class="large-12 columns">
      <div class="nav-bar right">
       <ul class="button-group">
         <li><a href="#" class="button">Link 1</a></li>
         <li><a href="#" class="button">Link 2</a></li>
         <li><a href="#" class="button">Link 3</a></li>
         <li><a href="#" class="button">Link 4</a></li>
        </ul>
      </div>
      <h1><a href="{{ URL::route('home') }}">Blog <small>This is my blog. It's awesome.</small></a></h1>
      <hr />
    </div>
  </div>

  <div class="row">
    <div class="large-12 columns" role="content">
	@yield('content')
    </div>
  </div>

  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>&copy; Copyright no one at all. Go to town.</p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/foundation.js') }}
    <script>
      $(document).foundation();

      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script>
  </body>
</html>
