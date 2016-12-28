@extends('layout')

@section('title', 'Welcome Home')

@section('content')

    <img src="/img/comingsoon-web.jpg" alt="coming soon banner" class="img-responsive"  />

    <div id="ticket" class="container-fluid ticket-box">
        <div class="row">
            <div class="col-md-12">
                <h3>The Date: 28 February 2017</h3>

                <div class="row">
                    <div class="col-md-4">
                        <strong>Early Bird (limited)</strong>
                        <p>IDR 500,000,- until 25 January 2017</p>
                    </div>
                    <div class="col-md-4">
                        <strong>Regular</strong>
                        <p>IDR 700,000,- until 28 February 2017</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <a class="btn btn-primary btn-lg" href="https://www.tiket.com/scrumday-bandung-2017" role="button">Purchase Ticket Now &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sponsors" class="container-fluid push-top">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="">Sponsors</h3>

                <p>We are looking for like minded companies or individuals who would like to sponsor our mission to bring agility and professionalism into software development ecosystem in Indonesia.
                </p>

                <a class="btn btn-primary btn-lg" href="/Proposal_Sponsor_en.pdf" role="button">Support Our Mission &raquo;</a>
            </div>            
        </div>
    </div>

    <hr/>
    
    <div id="event" class="container first">
        <div class="row">
            <div class="col-md-5">
                <h2>Theme</h2>
                <p>Professionalism in software development</p>

                <h2>Our Goals</h2>
                <p>Igniting change in software development ecosystem, inspiring future leaders</p>
                

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
    <div id="venue" class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Venue</h3>

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
