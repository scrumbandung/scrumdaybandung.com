@extends('layout')

@section('title', 'Call for Presentation')

@section('content')

<img src="/img/call-for-presentation-banner.jpg" alt="Scrum Day Bandung 2018 Call for Presentation" class="img-responsive"  />

<div id="resources" class="container push-top">
	<div class="row">

			@if (session('status'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                {{ session('status') }}
              </div>
            @endif

			<h1>Call for Presentation</h1>

			<div class="col-md-12">
				<p>Thank you for landing to this page and considering our conference for you to send your message that will change the way people in software development work together. We are one of a few agile conference in the region that still have the idealism to keep commercials factors out of the conference so that we can reach our vision to make an impact in software development ecosystem in South East Asia. Scrum Day Bandung is organised independently by a group of Scrum professionals in Indonesia who are passionate in making a change in the software development ecosystem. We want to make sure that every speakers who will be on the platform have the freedom to speak out the brutal truths to the audience. The organiser of Scrum Day Bandung are not looking for marketers &amp; methodologists, we are looking for change agents who will make an impact in software development ecosystem in South East Asia. If you think you are one of that person, please fill out the form below and send us your presentation for us to assess.
				</p>

				<p>
				<strong>Guidelines for your presentation:</strong>
				<ul>
					<li>No sales &amp; no marketing about your brand or your product. The organiser will ban any speaker who does not respect this rule.</li>
					<li>You are not allowed to use your opportunity on the stage for hiring people. The organiser will ban any speaker who does not respect this rule.</li>
					<li>Your presentation must relate to Scrum. You can talk about any other Agile practices but you must explain how the Agile practice fits within the Scrum framework.</li>
					<li>Make sure the Scrum mechanics, values and principles is according to <a href="http://www.scrumguides.org">Scrum Guide</a>. We don't want to confuse the audience with your own version of Scrum.</li>	
					<li>No Scrum basics. We only want high quality talks. If it's revolutionary, we would like to hear it.</li>							
				</ul>
				</p>

				<p>
				Your presentation will go through a rigorous process and will be assessed by a group of Scrum professionals. Here are the schedule for the submission and announcement:
				<ul>
				<li><strong>Call for presentation</strong>: Early August 2017</li>
				<li><strong>Submission closed</strong>: October 31st 2017</li>
				<li><strong>Selection announcement</strong>: Mid November 2017</li>
				</ul>
				The selection process will take some time. Please be patient to wait for the announcement email from the programme committee. We will send you an email if your talk is selected. If your talk is selected by the programme committee, you are expected to support your own travel and accommodation to and from Bandung, Indonesia. We would like stay independent hence not relying on big sponsors and keep the cost affordable for the participants. We would like to keep Scrum Day Bandung purely for learning from each other's experience.  
				</p>

			</div>
	
	        <form id="contact_form" class="form-horizontal" method="post" action="/submit-presentation">
	          <input type="hidden" name="_token" value="{{ csrf_token() }}">
	          <div class="col-md-12">

	            @if (count($errors) > 0)
	              <div class="alert alert-danger">
	                <ul>
	                  @foreach ($errors->all() as $error)
	                    <li>{{ $error }}</li>
	                  @endforeach
	                </ul>
	              </div>
	            @endif
	          </div>

	          <div class="col-md-12">
	            <fieldset class="form-group">
	            	<label for="fullname">@lang('contact.fullname') (*)</label>
	            	<input type="text" class="form-control" id="fullname" name="fullname" placeholder="">
	            </fieldset>
	            <fieldset class="form-group"> 
	            	<label for="email">@lang('contact.email') (*)</label>
	            	<input type="email" class="form-control" id="email" name="email" placeholder="">           
	            </fieldset>
	            <fieldset class="form-group"> 
	            	<label for="linkedin">@lang('contact.linkedin') (*)</label>
	            	<input type="linkedin" class="form-control" id="linkedin" name="linkedin" placeholder="">           
	            </fieldset>
	            <fieldset class="form-group"> 
	            	<label for="twitter">@lang('contact.twitter') (*)</label>
	            	<input type="twitter" class="form-control" id="twitter" name="twitter" placeholder="">           
	            </fieldset>

				<fieldset class="form-group">
	              <label for="about">@lang('contact.about') (*)</label><br/>
	              
	              <textarea class="form-control" rows="3"></textarea>
	            </fieldset>

	            <fieldset class="form-group">
	              <label for="talk">@lang('contact.talk') (*)</label><br/>
	              
	              <textarea class="form-control" rows="3"></textarea>
	            </fieldset>

	            <fieldset class="form-group">
	            	<label for="track">@lang('contact.track') (*)</label><br/>

	            	<div class="radio">
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
					    Product Management &amp; Business Agility (Product Owner subject areas)
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					    People, Coaching &amp; Servant Leadership (Scrum Master subject areas)
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					    Software Craftmanship &amp; Technical Excellence (Development Team subject areas)
					  </label>
					</div>
	            </fieldset>

				<fieldset class="form-group">
	              <label for="message">@lang('contact.message') (*)</label><br/>
	              
	              <textarea class="form-control" rows="3"></textarea>
	            </fieldset>

				<fieldset class="form-group">
	              <label for="why">@lang('contact.talk.why') (*)</label><br/>
	              
	              <textarea class="form-control" rows="3"></textarea>
	            </fieldset>

	            <fieldset class="form-group">
	              <label for="impact">@lang('contact.impact') (*)</label><br/>
	              
	              <textarea class="form-control" rows="3"></textarea>
	            </fieldset>

				<fieldset class="form-group">
				    <label for="exampleInputFile">Presentation File</label>
				    <input type="file" id="exampleInputFile">
				    <p class="help-block">Please attach your presentation file in .pptx for us to review.</p>
				</fieldset>

				<input type="submit"/>
	          </div>

	        </form>


	        <h2>Programme Committee</h2>
	        <div>
	        	The program committee are experienced Scrum professionals with specific interests. The program committee are independent, objective, neutral, unbiased and sterile from any external influences to ensure that only the highest quality talks gets selected for the conference. The committee have the full rights to reject any talks that does not match their criteria.
	        </div>
	        <br/>

	        <div class="col-md-12">
	        	<div class="row">
			        <div class="col-md-2">
			        	<div class="thumbnail">
							<img class="img-responsive img-circle" src="/img/committee/Jiorutte.png" alt="Jiorutte Banjarnahor" />

							<p class="caption text-center">Jiorutte Banjarnahor</p>
						</div>
					</div>
					<div class="col-md-2">
						<div class="thumbnail">
							<img class="img-responsive img-circle" src="/img/committee/Kevin.png" alt="Kevin Kane" />
						
							<p class="caption text-center">Kevin Kane</p>
						</div>
			        </div>
			        <div class="col-md-2">
			        	<div class="thumbnail">
							<img class="img-responsive img-circle" src="http://placehold.it/150x150?text=Gesit" alt="Gesit Prasasti Alam" />

							<p class="caption text-center">Gesit Prasasti Alam</p>
						</div>
			        </div>
			        <div class="col-md-2">
			        	<div class="thumbnail">
							<img class="img-responsive img-circle" src="http://placehold.it/150x150?text=Fenny" alt="Fenny Valentina" />

							<p class="caption text-center">Fenny Valentina</p>
						</div>
			        </div>
			        <div class="col-md-2">
			        	<div class="thumbnail">
							<img class="img-responsive img-circle" src="/img/committee/Melvin.png" alt="Melvin Sumapung" />

							<p class="caption text-center">Melvin Sumapung</p>
						</div>
			        </div>
			        <div class="col-md-2">
			        	<div class="thumbnail">
							<img class="img-responsive img-circle" src="http://placehold.it/150x150?text=Edo" alt="Edo Suryo Pamungkas" />

							<p class="caption text-center">Edo Pamungkas</p>
						</div>
			        </div>
			        
			        <div class="col-md-2">
			        	<div class="thumbnail">
							<img class="img-responsive img-circle" src="/img/committee/Hussein.jpg" alt="Muhammad Hussein" />

							<p class="caption text-center">Muhammad Hussein</p>
						</div>
			        </div>
			        <div class="col-md-2">
			        	<div class="thumbnail">
							<img class="img-responsive img-circle" src="/img/committee/Pepe.png" alt="Artanto Ishaam" />

							<p class="caption text-center">Artanto Ishaam</p>
						</div>
			        </div>
			        <div class="col-md-2">
			        	<div class="thumbnail">
							<img class="img-responsive img-circle" src="/img/committee/Agung.jpg" alt="Agung Firdaus" />

							<p class="caption text-center">Agung Firdaus</p>
						</div>
			        </div>
			        <div class="col-md-2">
			        	<div class="thumbnail">
							<img class="img-responsive img-circle" src="/img/committee/Aditya.png" alt="Agung Firdaus" />

							<p class="caption text-center">Aditya Suryomurtjito</p>
						</div>
			        </div>
			        <div class="col-md-2">
			        	<div class="thumbnail">
							<img class="img-responsive img-circle" src="/img/committee/Adhitya.jpg" alt="Agung Firdaus" />

							<p class="caption text-center">Adhitya Dwitama</p>
						</div>
			        </div>
	        	</div>
	        </div>
		</div>
</div>