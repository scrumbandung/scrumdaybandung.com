@extends('layout')

@section('title', 'Welcome Home')

@section('content')

    <img src="/img/web-banner.jpg" alt="coming soon banner" class="img-responsive"  />

    <div id="ticket" class="container-fluid ticket-box">
        <div class="row">
            <div class="container">
                <div class="col-md-12">
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
    </div>

    <div id="event" class="container push-top">
        <div class="row">
            <div class="col-md-5">
                <h3>Theme</h3>
                <p>Professionalism in software development</p>

                <h3>Our Goals</h3>
                <p>Igniting change in software development ecosystem, inspiring future leaders</p>
                
                <h3>Date &amp; Time</h3>
                <p>February, 28<sup>th</sup> 2017 at 08:30 AM - 05:45 PM WIB</p>

                <h3>Place</h3>
                <p>
                    Hotel Novotel Bandung <br>
                    Jl. Cihampelas No.23, Tamansari, Bandung Wetan, Bandung City, West Java 40171 
                    <a href="https://www.google.co.id/maps/place/Hotel+Novotel+Bandung/@-6.9048974,107.6019924,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e646d68f1315:0x87181e433bf2ec24!8m2!3d-6.9048974!4d107.6041865" target="_blank" class="btn btn-social btn-primary">
                        <span class="fa fa-map-marker"></span> View on Google Map
                    </a>
                </p>
            </div>
            <div class="col-md-7">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8QEpESit11s"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr/>

    <div id="schedule" class="container-fluid text-center">
        <div class="row">
            <div class="col-md-12">
                <h2>Schedule</h2>

                <a id="sched-embed" href="http://scrumdaybandung2017.sched.org/">View the Scrum Day Bandung 2017 schedule & directory.</a><script type="text/javascript" src="//scrumdaybandung2017.sched.org/js/embed.js"></script>
            </div>            
        </div>
    </div>

    <hr/>

    <div id="sponsors" class="container-fluid push-top text-center">
        <div class="row">
            <div class="col-md-12">
                <h2 class="">Sponsors</h2>

                <p>We are looking for like minded companies and individuals who would like to sponsor our mission to bring agility and professionalism into software development ecosystem in Indonesia.
                </p>



                <a class="btn btn-primary btn-social btn-lg" href="/Proposal_Sponsor_en.pdf" role="button"><span class="fa fa-handshake-o"></span> Support Our Mission &raquo;</a>
            </div>        
            <div class="col-md-12">
                <h3>Silver Sponsors</h3>
                <div class="row">
                    <div class="col-xs-6">
                        <a href="http://www.scrum.org"><img src="/img/sponsors/scrum_org.png" class="img-responsive" /></a>
                    </div>
                    <div class="col-xs-6">
                    </div>
                </div>
            </div>    
        </div>
    </div>
@endsection
