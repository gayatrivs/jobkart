@extends('layouts.app')
@section('content')
<section id="contact" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 conForm">
        <div class="panel panel-default">
                <div class="panel-heading text-center"><h5>Post a new job</h5></div>
        

        <p><h4>Enter job details</h4></p>
         <div class="panel-body">
        @include('inc.errors')
        <div id="message"></div>
        {!! Form::open(['url'=>'/createnewjob','method'=>'post']) !!}
          <input name="job_title" id="job_title" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Job Title..." >
          <input name="salary" id="salary" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Salary" >
          <textarea name="description" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Job Details..."></textarea>
          <div class="panel-heading"><h5>Select skill required <h5><br></div>
          <div class="panel-body">
          <input type = "radio" name = "skill" value = "PHP_HTML_CSS"><span>PHP/HTML/CSS</span><br>
          <input type = "radio" name = "skill" value = "ANDROID_JS"><span>ANDROID/JS</span><br>
          <input type = "radio" name = "skill" value = "JAVA_CPP_C"><span>JAVA/CPP/C</span><br>
          <input type = "radio" name = "skill" value = "SQL_MONGODB"><span>SQL/MONGODB</span><br>
          <input type = "radio" name = "skill" value = "HADOOP_TENSORFLOW"><span>HADOOP/TENSORFLOW</span><br>
          </div>
        </div>
          <br>
          <div class="row">
          <input name="date" id="date" type="date" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-offset-4" value = "{{ Carbon\Carbon::tomorrow()->format('Y-m-d') }}" min = "{{ Carbon\Carbon::tomorrow()->format('Y-m-d') }}">
          </div>
          {{ Form::submit('Post your job',['class' => "submitBnt"]) }}
        <div id="simple-msg"></div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
   </div>
   </div>
   </div>
</section>
@endsection