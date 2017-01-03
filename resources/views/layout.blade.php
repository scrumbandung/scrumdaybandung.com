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
          </button><a class="navbar-brand" href="#home"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">          
            <ul class="nav navbar-nav" data-dropdown-menu>
                <li><a href="/">Home</a></li> 
                <li role="presentation" class="dropdown">
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/about/team">The Scrum Team</a></li>
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

    <footer id="contact">
      <div class="container">
        <div class="col-sm-8">
          <div class="col-sm-5 text-right">
            <h4>Contact Us</h4>
          
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=scrumdaybandung@gmail.com" target="_blank" class="btn btn-social-icon btn-google" role="button"><i class="fa fa-envelope fa-lg"></i></a>
            scrumdaybandung@gmail.com
          </div>
          
        </div>
        <div class="col-sm-4 text-right">
          <h4>Connect with Us</h4>
          <div>
            <a href="https://www.twitter.com/ScrumDayBandung" target="_blank" class="btn btn-social-icon btn-twitter" role="button"><i class="fa fa-twitter fa-lg"></i></a>
            <a href="https://www.facebook.com/ScrumDayBandung" target="_blank" class="btn btn-social-icon btn-facebook" role="button"><i class="fa fa-facebook fa-lg"></i></a>
            <a href="https://www.instagram.com/scrumdaybandung/" target="_blank" class="btn btn-social-icon btn-instagram" role="button"><i class="fa fa-instagram fa-lg"></i></a>
            <a href="https://www.youtube.com/channel/UCRt916JY7GHN-b2b5GPa3Fw" target="_blank" class="btn btn-social-icon btn-google" role="button"><i class="fa fa-youtube-play fa-lg"></i></a>
          </div>
        </div>
      </div>
      <div class="copyright">© 2016-2017 Scrum Chapter Bandung Community</div>
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
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
</html>
