@extends('layout')

@section('title', 'F.A.Q')

@section('content')

<div id="faq" class="container push-top">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">Frequently Asked Questions</h1>

			<p>
				Do you have any questions regarding Scrum Day Bandung conference? Please read the following frequently asked questions that we have received so far. Can not find the answers to your questions about the conference? Please do not hesitate to send us your questions using the <a href="{{ route('contact', ['locale' => 'en']) }}">contact form</a>.
			</p>

			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingOne">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#scrum-simulation" aria-expanded="false" aria-controls="scrum-simulation">
			          Is there any Scrum simulation session during the conference?
			        </a>
			      </h4>
			    </div>
			    <div id="scrum-simulation" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
			      <div class="panel-body">
			        Scrum Day Bandung conference is not a conference about methodology that discusses Scrum basics or Scrum mechanics. Scrum Day Bandung is a conference about business agility and modern management that is targeted at managers and corporate leaders. The Scrum simulation session will not be held during the conference. We encourage you to attend the pre-conference Scrum training for a Scrum simulation session. Every conference attendants will get a complimentary seat to attend the pre-conference Scrum training. Please contact us using the <a href="{{ route('contact', ['locale' => 'en']) }}">contact form</a> after you have made the payment for the conference if you wish to participate in the pre-conference training.
			      </div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingThree">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#prerequisites" aria-expanded="false" aria-controls="prerequisites">
			          Are there any prerequisites prior to attending this conference?
			        </a>
			      </h4>
			    </div>
			    <div id="prerequisites" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			      <div class="panel-body">
			        Ideally Scrum Day Bandung conference attendants are already using Scrum in the company. If you have not already used Scrum or unsure whether you are currently using the official Scrum as defined in <a href="http://www.scrumguides.org" target="_blank">Scrum Guide</a>, please read the <a href="{{ route('resources', ['locale' => 'en']) }}">Scrum Resources</a> section on our website for information that you need to know prior to attending Scrum Day Bandung conference.
			      </div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingTwo">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#non-technical" aria-expanded="false" aria-controls="non-technical">
			          I am not a technical person, can I attend this event?
			        </a>
			      </h4>
			    </div>
			    <div id="non-technical" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			      <div class="panel-body">
			         Scrum Day Bandung conference is an event targeted at managers and corporate leaders, it is not an event targeted at software developers or technical people. If you are a leader leading a group of people or a decision maker in the company, you are more than welcome to attend this event. The higher your position in the corporate ladder, the more you need to attend this event.
			      </div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingFour">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#technical" aria-expanded="false" aria-controls="technical">
			          I am a technical person, can I attend this event?
			        </a>
			      </h4>
			    </div>
			    <div id="technical" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
			      <div class="panel-body">
			         Scrum Day Bandung conference is an event is targeted at managers and corporate leaders. Although the event is not targeted at software developers or technical people, you are more than welcome to attend the event if you would like to learn more about business agility and modern management.
			      </div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="heading5">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#hotel-special-price" aria-expanded="false" aria-controls="hotel-special-price">
			          As a conference attendant, will I get a special price staying at Pangheghar Hotel?
			        </a>
			      </h4>
			    </div>
			    <div id="hotel-special-price" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
			      <div class="panel-body">
			         Yes you will. Please contact us using the <a href="{{ route('contact', ['locale' => 'en']) }}">contact form</a> to get a special price staying at Pangheghar Hotel.
			      </div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="heading6">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#cert-attendance" aria-expanded="false" aria-controls="cert-attendance">
			          As a conference attendant, will I receive a certificate of attendance?
			        </a>
			      </h4>
			    </div>
			    <div id="cert-attendance" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
			      <div class="panel-body">
			         Unfortunately no. We do not provide certificate of attendance for attending Scrum Day Bandung conference.
			      </div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="heading7">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#on-spot-payment" aria-expanded="false" aria-controls="on-spot-payment">
			          Can I make payment on the spot?
			        </a>
			      </h4>
			    </div>
			    <div id="on-spot-payment" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
			      <div class="panel-body">
			         Unfortunately no. We do not have payment on the spot as Scrum Day Bandung conference is an exclusive event for managers and corporate leaders hence the number of seats is very limited. Due to the popularity of this event, tickets may already be sold out days before the event.
			      </div>
			    </div>
			  </div>

			</div>
		</div>
	</div>
</div>