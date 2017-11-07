@extends('layouts.app')
@section('content')
  @include('inc.errors')
	<section id="contact" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 conForm">
        <div class="panel panel-default">
        <div class="panel-heading">
        <h5>Register with us as a Job Provider</h5>
        </div>
        <div id="message"></div>
        <div class="panel-body">
        {!! Form::open(['url'=>'/jobproviderregister','method'=>'post']) !!}
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name" value="{{ old('name') }}" required >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" value="{{ old('email') }}" placeholder="Email Address" required>
          <input name="password" id="password" type="password" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter password" required>
          <input name="password_confirmation" id="password_confirmation" type="password" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Re-enter password" required>
          <input type = "checkbox" name = "Terms and Conditions" value = "on" checked>I agree to all the terms and conditions <br>

          {{ Form::submit('Register',['class' => "submitBnt"]) }}
          <div id="simple-msg"></div>
        {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
</section>

@endsection