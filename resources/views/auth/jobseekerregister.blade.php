@extends('layouts.app')

@section('content')
  @include('inc.errors')
	<section id="contact" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 conForm">
        <div class="panel panel-defualt">
          <div class="panel-heading">
          <h5>Register with us as a job seeker</h5>
          </div>
        <div id="message"></div>
        <div class="panel-body">
        {!! Form::open(['url'=>'/jobseekerregister','method'=>'post']) !!}
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  value="{{ old('name') }}" placeholder="Your name" required >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr"  value="{{ old('email') }}" placeholder="Email Address" required>
          <input name="phone_no" id="phone_no" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" value="{{ old('phone_no') }}" placeholder="Phone number" required>
          <input name="password" id="password" type="password" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Enter password" required>
          <input name="password_confirmation" id="password_confirmation" type="password" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Re-enter password" required>
          <textarea name="resume" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" value="{{ old('resume') }}" placeholder="Upload your resume" required></textarea>
          <div class="panel-heading"><h5>Select your skills <h5><br></div>
			    <div class="panel-body">
          <input type = "checkbox" name = "PHP/HTML/CSS" value = "yes"><span>PHP/HTML/CSS</span><br>
    			<input type = "checkbox" name = "ANDROID/JS" value = "yes"><span>ANDROID/JS</span><br>
    			<input type = "checkbox" name = "JAVA/CPP/C" value = "yes"><span>JAVA/CPP/C</span><br>
    			<input type = "checkbox" name = "MYSQL/MONGODB" value = "yes"><span>SQL/MONGODB</span><br>
    			<input type = "checkbox" name = "HADOOP/TENSORFLOW" value = "yes"><span>HADOOP/TENSORFLOW</span><br>
          <br>
          </div>
        </div>
      </div>
          <input type = "checkbox" name = "Terms and Conditions" value = "on" checked>I agree to all the terms and conditions <br>
         

          {{ Form::submit('Register',['class' => "submitBnt"]) }}
          <div id="simple-msg"></div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</section>

@endsection