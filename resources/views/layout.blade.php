<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Scrum Day Bandung is a business and management conference using Scrum as its management framework." >
        <meta name="google-site-verification" content="YxougGVxw7Ijf6vnhM68HlUD7nX3pNH1ryw3y-RbG9I" />
        <title>Scrum Day Bandung 2017 - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet" />
       
    </head>
    <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="/"><img src="/img/logo_header_web.png" width="80%" class="img-responsive" alt="scrum day bandung logo"/></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">          
            <ul class="nav navbar-nav" data-dropdown-menu>
                <li><a href="/">Home</a></li> 
                <li role="presentation" class="dropdown">
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#team">The Scrum Team</a></li>
                        <li><a href="/about/event">The Event</a></li>
                    </ul>
                </li> <!--
                <li><a href="#">Speakers</a></li>
                <li><a href="#">Schedule</a></li>
                <li><a href="#">Venue</a></li>
                <li><a href="#">Sponsors</a></li>
                <li><a href="#">Travel Guide</a></li> -->
            </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    @yield('content')

    <nav class="navbar navbar-default navbar-fixed-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <strong>Early Bird</strong>
            <p>IDR 500,000,- until 25 January 2017</p>
          </div>
          <div class="col-md-3">
            <strong>Regular</strong>
            <p>IDR 700,000,- until 28 February 2017</p>
          </div>
          <div class="col-md-6 text-right">
            <a class="btn btn-primary btn-lg" href="https://www.tiket.com/scrumday-bandung-2017" role="button">Buy Ticket &raquo;</a>
          </div>
        </div>
      </div>
    </nav>

    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <h3>Connect With Us</h3>

            <ul>
              <li><a class="btn btn-social-icon btn-twitter" href="http://twitter.com/ScrumDayBandung"><span class="fa fa-twitter fa-3x"></span></a></li>
              <li><a class="btn btn-social-icon btn-facebook" href="http://facebook.com/ScrumDayBandung"><span class="fa fa-facebook fa-3x"></span></a></li>
              <li><a class="btn btn-social-icon btn-instagram" href="http://instagram.com/ScrumDayBandung"><span class="fa fa-instagram fa-3x"></span></a></li>
              <li><a class="btn btn-social-icon btn-youtube" href="https://www.youtube.com/channel/UCRt916JY7GHN-b2b5GPa3Fw"><span class="fa fa-youtube fa-3x"></span></a></li>
            </ul>
          </div>
          <div class="col-md-6 col-xs-12">
            <!--<ul class="">
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>-->
          </div>
          <div class="col-md-12">
            &copy; 2016-2017 Scrum Chapter Bandung Community 
          </div>
        </div>
      </div>
    </footer>

    </body>

    <script src="/js/app.js" type="text/javascript"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-89487135-1', 'auto');
      ga('send', 'pageview');
    </script>
</html>
