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

			<div>
				<p>Thank you for coming to this page and considering to submit your presentation for Scrum Day Bandung 2018. We are one of a few agile conference in the region that still have ideals to keep commercials factors out. We want to make sure that every speakers have the freedom to speak out the brutal truth to the audience.</p>

				<strong>Guidelines:</strong>
				<ul>
					<li>No sales. No marketing. The organiser will ban any speaker who does not respect this rule.</li>
					<li>You are not allowed to use your opportunity on the stage for Hiring. The organiser will ban any speaker who does not respect this rule.</li>
					<li>Your presentation must relate to Scrum. You can talk about any other Agile practices but you must explain how it fits in Scrum.</li>
					<li>Make sure the Scrum mechanics, values and principles is according to <a href="http://www.scrumguides.org">Scrum Guide</a>. We don't want to confuse the participants with your own version of Scrum.</li>								
				</ul>
				</p>
			</div>
	
	        <form id="contact_form" class="form-horizontal" method="post" action="/contact">
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

	          <div class="form-group">
	              
	              <div class="col-md-9">
	              </div>
	          </div>
	          <div class="form-group">
	              

	              <div class="col-md-9">
	              	
	              </div>
	          </div>

	          <div class="col-md-12">
	            <fieldset class="form-group">
	            	<label for="fullname" class="pull-left">@lang('contact.fullname') (*)</label>
	            	<input type="text" class="form-control" id="fullname" name="fullname" placeholder="">
	            </fieldset>
	            <fieldset class="form-group"> 
	            	<label for="email" class="pull-left">@lang('contact.email') (*)</label>
	            	<input type="email" class="form-control" id="email" name="email" placeholder="">           
	            </fieldset>
	            <fieldset class="form-group"> 
	            	<label for="linkedin" class="pull-left">@lang('contact.linkedin') (*)</label>
	            	<input type="linkedin" class="form-control" id="linkedin" name="linkedin" placeholder="">           
	            </fieldset>
	            <fieldset class="form-group"> 
	            	<label for="twitter" class="pull-left">@lang('contact.twitter') (*)</label>
	            	<input type="twitter" class="form-control" id="twitter" name="twitter" placeholder="">           
	            </fieldset>

				<fieldset class="form-group">
	              <label for="about" class="pull-left">@lang('contact.about') (*)</label><br/>
	              
	              <textarea class="form-control" rows="3"></textarea>
	            </fieldset>

	            <fieldset class="form-group">
	              <label for="talk" class="pull-left">@lang('contact.talk') (*)</label><br/>
	              
	              <textarea class="form-control" rows="3"></textarea>
	            </fieldset>

	            <fieldset class="form-group">
	            	<label for="track" class="pull-left">@lang('contact.track') (*)</label><br/>

	            	<div class="radio">
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
					    Product Management &amp; Business Agility
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					    People, Coaching &amp; Servant Leadership
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					    Software Craftmanship &amp; Technical Excellence
					  </label>
					</div>
	            </fieldset>

				<fieldset class="form-group">
	              <label for="message" class="pull-left">@lang('contact.message') (*)</label><br/>
	              
	              <textarea class="form-control" rows="3"></textarea>
	            </fieldset>

	            <fieldset class="form-group">
	              <label for="impact" class="pull-left">@lang('contact.impact') (*)</label><br/>
	              
	              <textarea class="form-control" rows="3"></textarea>
	            </fieldset>

				<fieldset class="form-group">
				    <label for="exampleInputFile">Presentation File</label>
				    <input type="file" id="exampleInputFile">
				    <p class="help-block">Please attach your presentation file for us to review.</p>
				</fieldset>
	          </div>

	        </form>

			<p>You will be contacted by the committee if your talk gets selected. If your talk gets selected by the committee, you are expected to support your travel and accommodation to and from Bandung, Indonesia. We would like to keep the cost affordable for the participants, stay independent and keep the commercial factors out of the conference hence not relying on big sponsors. We would like to keep the conference purely for sharing experience and challanges with Scrum and learning from each other.
			</p>

			<p>

	        <h2>Programme Committee</h2>
	        <div>
	        	The program committee are well trained Scrum Experts with specific interests. The program committee are independent, objective, neutral, unbiased and sterile from any external influence to ensure that only the best talks gets accepted.
	        </div>
		</div>
</div>