@extends('layout')

@section('title', 'Welcome Home')

@section('content')
    <div class="jumbotron text-center">
      <div class="container">
        <h1>Scrum Day Bandung 2017</h1>

        <p class="lead">Bandung, 28 February 2017</p>
            
        <a class="btn btn-primary btn-lg" href="#" role="button">Register Now &raquo;</a>
        <a class="btn btn-default btn-lg" href="#" role="button">Learn More &raquo;</a>
        
      </div>
    </div>

    <div class="callout large">
        <div class="row column text-center">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Theme</h2>
                <p>Professionalism in software development</p>

                <h2>Our Goals</h2>
                <p>Igniting change in software industry, inspiring future leaders</p>

                <h2>Our Mission</h2>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/8QEpESit11s" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <hr/>

    <div id="speakers" class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">The speakers</h3>
            </div>

            <div class="col-md-4">
                <img class="thumbnail" src="http://placehold.it/300x300">
            </div>
            <div class="col-md-4">
                <img class="thumbnail" src="http://placehold.it/300x300">
            </div>
            <div class="col-md-4">
                <img class="thumbnail" src="http://placehold.it/300x300">
            </div>
        </div>
    </div>

    <hr/>

    <div id="schedule" class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Schedule</h3>

                <a id="sched-embed" href="http://scrumdaybandung2017.sched.org/">View the Scrum Day Bandung 2017 schedule & directory.</a><script type="text/javascript" src="//scrumdaybandung2017.sched.org/js/embed.js"></script>
            </div>            
        </div>
    </div>

    <hr/>
    <div id="venue" class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Venue</h3>
            </div>     
            <div class="col-md-6">
                <strong>Novotel Bandung</strong>

                <p>25, Jl. Cihampelas No.23, Tamansari, Bandung Wetan, Bandung City, West Java 40171</p>

                <p>(022) 4211001</p>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.880445463226!2d107.6019978143177!3d-6.904897395010749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e646d68f1315%3A0x87181e433bf2ec24!2sHotel+Novotel+Bandung!5e0!3m2!1sen!2sid!4v1480865581131" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>       
        </div>
    </div>
    <hr/>
    <div id="sponsors" class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Sponsors</h3>

                <a class="btn btn-primary btn-lg" href="#" role="button">Become a sponsor &raquo;</a>
            </div>            
        </div>
    </div>
    <hr/>
    <div id="schedule" class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Travel Guide</h3>
            </div>            

            <div class="col-md-4">
                <img class="thumbnail" src="http://placehold.it/300x200">
            </div>
            <div class="col-md-4">
                <img class="thumbnail" src="http://placehold.it/300x200">
            </div>
            <div class="col-md-4">
                <img class="thumbnail" src="http://placehold.it/300x200">
            </div>
            <div class="col-md-4">
                <img class="thumbnail" src="http://placehold.it/300x200">
            </div>
            <div class="col-md-4">
                <img class="thumbnail" src="http://placehold.it/300x200">
            </div>
            <div class="col-md-4">
                <img class="thumbnail" src="http://placehold.it/300x200">
            </div>
        </div>
    </div>
@endsection
