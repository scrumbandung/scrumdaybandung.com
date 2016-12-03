<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scrum Day Bandung 2017 - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet" />
       
    </head>
    <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Scrum Day Bandung 2017</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">          
            <ul class="nav navbar-nav" data-dropdown-menu>
                <li><a href="#">Home</a></li>
                <li role="presentation" class="dropdown">
                    <a href="#">About</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">The Scrum Team</a></li>
                        <li><a href="#">The Event</a></li>
                    </ul>
                </li>
                <li><a href="#">Speakers</a></li>
                <li><a href="#">Schedule</a></li>
                <li><a href="#">Venue</a></li>
                <li><a href="#">Sponsors</a></li>
                <li><a href="#">Travel Guide</a></li>
            </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    @yield('content')
    </body>

    <script src="/js/app.js" type="text/javascript"></script>
    <!--
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script src="/js/foundation.min.js" type="text/javascript"></script>
    <script src="/js/foundation.util.box.js" type="text/javascript"></script>
    <script src="/js/foundation.util.keyboard.js" type="text/javascript"></script>
    <script src="/js/foundation.util.motion.js" type="text/javascript"></script>
    <script src="/js/foundation.util.nest.js" type="text/javascript"></script>
    <script src="/js/foundation.core.js" type="text/javascript"></script>
    <script src="/js/foundation.dropdown.js" type="text/javascript"></script>
    <script src="/js/foundation.dropdownMenu.js" type="text/javascript"></script>
    <script src="/js/foundation.sticky.js" type="text/javascript"></script>
    -->
</html>
