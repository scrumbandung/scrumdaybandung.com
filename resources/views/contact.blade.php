@extends('layout')

@section('title', 'Contact Us')

@section('content')

<div id="resources" class="container first">
	<div class="row">
		<div class="panel col-md-12">
			@if (session('status'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                {{ session('status') }}
              </div>
            @endif

			<h1>Contact Us</h1>
			<p>Have you got any enquiries for us? Give us a buzz. We are at your service.</p>

	        <form id="contact_form" method="post" action="/contact">
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
	          <div class="col-md-6">
	            <fieldset class="form-group">
	              <label for="fullname" class="pull-left">@lang('contact.fullname') (*)</label>
	              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="">
	            </fieldset>
	            <fieldset class="form-group">
	              <label for="email" class="pull-left">@lang('contact.email') (*)</label>
	              <input type="email" class="form-control" id="email" name="email" placeholder="">
	            </fieldset>
	            <fieldset class="form-group">
                    <label for="delivery_method">@lang('contact.subject') (*)</label>
                    <select class="form-control" name="subject">
                    	<option value="registration">@lang('contact.reg.enquiries')</option>
                        <option value="sponsor">@lang('contact.req.sponsor')</option>
                        <option value="media">@lang('contact.req.media')</option>
                    </select>
                </fieldset>
	            <fieldset class="form-group">
	              <label for="company" class="pull-left">@lang('contact.company')</label>
	              <input type="text" class="form-control" id="company" name="company" placeholder="">
	            </fieldset>
	          </div>

	          <div class="col-md-6">
	            <fieldset class="form-group">
	              <label for="message" class="pull-left">@lang('contact.message') (*)</label>
	              <textarea class="form-control" rows="10" name="message" placeholder=""></textarea>
	            </fieldset>
	            <fieldset class="form-group pull-right">
	              <button class="btn btn-primary" onclick="">@lang('contact.send')</button>
	            </fieldset>
	          </div>
	        </form>
		</div>
	</div>
</div>

@endsection