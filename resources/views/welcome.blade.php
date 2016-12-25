@extends('layout')

@section('title', 'Welcome Home')

@section('content')

    <div id="banner" class="container-fluid">
        <div class="row">
            <div class="col-md-12"><img src="/img/comingsoon-web.jpg" alt="coming soon banner" class="img-responsive" /></div>
        </div>
    </div>

    <div id="sponsors" class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="">Sponsors</h3>

                <a class="btn btn-primary btn-lg" href="/Proposal_Sponsor_en.pdf" role="button">Become a sponsor &raquo;</a>
            </div>            
        </div>
    </div>

    <hr/>
    
    <div id="welcome" class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <h2>Theme</h2>
                <p>Professionalism in software development</p>

                <h2>Our Goals</h2>
                <p>Igniting change in software industry, inspiring future leaders</p>
                <!--
                <h2>Our Mission</h2>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul> -->
            </div>
            <div class="col-md-7">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/8QEpESit11s" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <hr/>
    <!--
    <div id="schedule" class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Schedule</h3>

                <a id="sched-embed" href="http://scrumdaybandung2017.sched.org/">View the Scrum Day Bandung 2017 schedule & directory.</a><script type="text/javascript" src="//scrumdaybandung2017.sched.org/js/embed.js"></script>
            </div>            
        </div>
    </div>

    <hr/>
    -->
    <div id="venue" class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Venue</h3>

                <p>
                    <strong>Hotel Novotel Bandung</strong>
                </p>
                <p>
                    Jl. Cihampelas No.23, Tamansari, Bandung Wetan, Bandung City, West Java 40171
                </p>
            </div>     
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1980.440889644751!2d107.60309779364012!3d-6.90473806744511!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x87181e433bf2ec24!2sHotel+Novotel+Bandung!5e0!3m2!1sen!2sid!4v1481452241905" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>      
        </div>
    </div>
    
    <hr/>
    <!--
    <div id="travel-guide" class="container-fluid">
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
    </div> -->
@endsection
