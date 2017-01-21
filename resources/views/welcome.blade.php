@extends('layout')

@section('title', 'Welcome Home. You are invited.')

@section('content')

    <img src="/img/web-banner.jpg" alt="coming soon banner" class="img-responsive"  />

    <div id="ticket" class="container-fluid ticket-box">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row text-center">
                                <div class="col-md-3">
                                    <strong>Early Bird (limited)</strong>
                                    <p>IDR 500,000,- until 25 January 2017</p>
                                </div>
                                <div class="col-md-3">
                                    <strong>Regular</strong>
                                    <p>IDR 700,000,- until 25 February 2017</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="btn btn-primary btn-lg" href="/Invitation.pdf" role="button" target="_blank"><span class="fa fa-envelope-o"></span>&nbsp;Invite Your Managers &raquo;</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn btn-primary btn-lg" href="https://www.tiket.com/scrumday-bandung-2017" role="button" target="_blank"><span class="fa fa-ticket"></span>&nbsp;Purchase Ticket Now &raquo;</a>
                                        </div>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="event" class="container push-top">
        <div class="row">
            <div class="col-md-6">
                <h3>What is Scrum Day Bandung</h3>
                <p>In brief, Scrum Day Bandung 2017 is an exclusive and intense 1-day business agility &amp; modern management with Scrum framework conference specifically for corporate leaders and managers. But we think Scrum Day Bandung 2017 is <em>more than just a conference</em>. We think it is a community movement in Indonesia towards software development ecosystem that emphasizes agility and professionalism. We think software is a business need for companies to be competitive in 21st century. We also think agility should be extended beyond IT because agility is a business requirement <em>NOT a software development methodology</em>. Scrum Day Bandung is one of that event in 2017 you do not want to miss. [&nbsp;<a href="/about/event">Read More <span class="fa fa-arrow-right"></span></a></a>&nbsp;]
                </p>
                <h3>Theme</h3>
                <p>Professionalism in software development</p>

                <h3>Goals</h3>
                <p>Igniting change in software development ecosystem, inspiring future leaders</p>

                <h3>Target Audience</h3>
                <p>
                This event is mainly targetted for corporate leaders and managers but not limited to:
                </p>
                <ul>
                    <li>Senior Leaders (CxO)</li>
                    <li>Managers</li>
                    <li>Scrum Masters</li>
                    <li>Scrum Product Owners</li>
                </ul>
                
                <h3>Date &amp; Time</h3>
                <p>Tuesday, February, 28<sup>th</sup> 2017 at 08:30 AM - 05:45 PM WIB</p>

                <h3>Place</h3>
                <p>
                    Grand Royal Panghegar Hotel Bandung <br/>
                    Jl. Merdeka No.2, Braga, Sumur Bandung, Kota Bandung, Jawa Barat 40111
                </p>
                <p>                    
                    <a href="https://www.google.co.id/maps/place/Grand+Royal+Panghegar+Hotel+Bandung/@-6.9155317,107.6081916,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e6306bc7f61b:0xd9e6868069cc79b7!8m2!3d-6.915537!4d107.6103803" target="_blank" class="btn btn-social btn-primary">
                        <span class="fa fa-map-marker"></span> View on Google Map
                    </a>
                </p>
            </div>
            <div class="col-md-6">
                <h3>What is Scrum</h3>
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
            <div class="col-xs-12">
                <a id="sched-embed" href="http://scrumdaybandung2017.sched.org/">View the Scrum Day Bandung 2017 schedule & directory.</a><script type="text/javascript" src="//scrumdaybandung2017.sched.org/js/embed.js"></script>
            </div>            
        </div>
    </div>

    <hr/>

    <div id="sponsors" class="container push-top text-center">
        <div class="row">
            <div class="col-md-12">
                <h2>Sponsors</h2>

                <p>We are looking for like minded companies and individuals who would like to sponsor our mission to bring agility and professionalism into software development ecosystem in Indonesia.
                </p>

                <a class="btn btn-primary btn-social" href="/Proposal_Sponsor_en.pdf" role="button" target="_blank"><span class="fa fa-money"></span> Support Our Mission Financially &raquo;</a>
            </div>        
            <div class="col-md-12">
                <div class="row">
                    <h3>Gold Sponsors</h3>

                    <div class="col-xs-6">
                        <a href="http://www.scrum.org" target="_blank"><img src="/img/sponsors/scrum_org.png" class="img-responsive"/></a>
                    </div>
                    <div class="col-xs-6 well well-sm">
                        <span class="text-muted">Spot still available for <b>Gold</b> sponsors</span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <h3>Silver Sponsors</h3>

                    <div class="col-xs-4">
                        <a href="http://www.intens.co.id/" target="_blank"><img src="/img/sponsors/intens.jpg" class="img-responsive" /></a>
                    </div>
                    <div class="col-xs-4 well well-sm">
                        <span class="text-muted">Spot still available for <b>Silver</b> sponsor</span>
                    </div>              
                    <div class="col-xs-4 well well-sm">
                        <span class="text-muted">Spot still available for <b>Silver</b> sponsor</span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <h3>Bronze Sponsors</h3>

                    <div class="col-xs-3 well well-sm">
                        <span class="text-muted">Spot still available for <b>Bronze</b> sponsor</span>
                    </div>
                    <div class="col-xs-3 well well-sm">
                        <span class="text-muted">Spot still available for <b>Bronze</b> sponsor</span>
                    </div>
                    <div class="col-xs-3 well well-sm">
                        <span class="text-muted">Spot still available for <b>Bronze</b> sponsor</span>
                    </div>
                    <div class="col-xs-3 well well-sm">
                        <span class="text-muted">Spot still available for <b>Bronze</b> sponsor</span>
                    </div>
                </div>
            </div>     
        </div>
    </div>
    
    <hr/>

    <div id="media" class="container push-top text-center">
        <div class="row">
            <div class="col-md-12">
                <h2>Media Partners</h2>
                <p>
                    We are looking for like minded medias who would like to help us spread the message abour our mission to bring agility and professionalism into software development ecosystem in Indonesia. Let's join the movement.
                </p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfy4JPTYPx6VhC249I8px2rTYVEDwWrXJKXnJFPWABLjwUG8w/viewform" target="_blank" class="btn btn-social btn-primary">
                    <span class="fa fa-camera"></span> Become Our Media Partner
                </a>&nbsp;
                <a href="https://www.dropbox.com/s/r5w1mve55lwdflc/Press%20Release.pdf" target="_blank" class="btn btn-social btn-primary">
                    <span class="fa fa-newspaper-o"></span> Press Release
                </a>
            </div>
            <br/>
            <div class="col-md-12 push-top">
                <div class="row">
                    <div class="col-sm-2 col-xs-3">
                        <a href="https://www.codepolitan.com/event/scrum-day-bandung-2017-5878875396880" target="_blank"><img src="/img/sponsors/codepolitan.png" class="img-responsive" /></a>
                    </div>
                    <div class="col-sm-2 col-xs-3">
                        <a href="http://indonesianetizen.com/cant-wait-scrum-day-bandung-2017/" target="_blank"><img src="/img/sponsors/indonesia-netizen.png" class="img-responsive" /></a>
                    </div>
                    <div class="col-sm-2 col-xs-3">
                        <a href="http://kreasitv.com" target="_blank"><img src="/img/sponsors/kreasitv.png" class="img-responsive" /></a>
                    </div>
                    <div class="col-sm-2 col-xs-3">
                        <a href="http://id.techinasia.com" target="_blank"><img src="/img/sponsors/techinasia.png" class="img-responsive" /></a>
                    </div>
                    <div class="col-sm-2 col-xs-3 well well-sm">
                        <span class="text-muted">Spot still available for <b>Media partner</b></span>
                    </div>
                    <div class="col-sm-2 col-xs-3 well well-sm">
                        <span class="text-muted">Spot still available for <b>Media partner</b></span>
                    </div>
                    <div class="col-sm-2 col-xs-3 well well-sm">
                        <span class="text-muted">Spot still available for <b>Media partner</b></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
