@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <br><br><br><br><br><br><br><br>
            <div class="panel panel-default">
                <div class="panel-heading"><h5>Hello {{ Auth::guard('jobseeker')->user()->name }}!</h5></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    My skills:<br>
                    @if(Auth::guard('jobseeker')->user()->PHP_HTML_CSS)
                        PHP/HTML/CSS<br>
                    @endif
                    @if(Auth::guard('jobseeker')->user()->MYSQL_MONGODB)
                        MYSQL/MONGODB<br>
                    @endif
                    @if(Auth::guard('jobseeker')->user()->JAVA_CPP_C)
                        JAVA/C++/C<br>
                    @endif
                    @if(Auth::guard('jobseeker')->user()->HADOOP_TENSORFLOW)
                        HADOOP/TENSORFLOW<br>
                    @endif
                    @if(Auth::guard('jobseeker')->user()->ANDROID_JS)
                        ANDROID/JS<br>
                    @endif
                    <br>
                    <p>Job listings for you:</p>
                    @include('inc.messages')
                    @if(!empty($message))
                        <div class="alert alert-warning">
                            {{ $message }} 
                        </div> 
                    @endif
                        @foreach($jobs as $job)
                            <div class="panel panel-info">
                                <div class="panel-heading"><strong>{{ $job->job_title }}</strong></div>
                                <div class="panel-body">
                                    Company: {{ $job->provider_name }}<br>
                                    Salary: {{ $job->salary }}<br>
                                    Joining date: {{ $job->join_date }}<br>
                                    Description: <br>{{$job->job_description}}<br><br>
                                    Skill required:
                                    @if($job->PHP_HTML_CSS)
                                        PHP/HTML/CSS
                                    @elseif($job->MYSQL_MONGODB)
                                        MYSQL/MONGODB
                                    @elseif($job->JAVA_CPP_C)
                                        JAVA/C++/C
                                    @elseif($job->HADOOP_TENSORFLOW)
                                        HADOOP/TENSORFLOW
                                    @elseif($job->ANDROID_JS)
                                        ANDROID/JS
                                    @endif
                                    <br><br>
                                    <a href="/apply/{{$job->id}}/{{$job->provider_id}}" class="btn btn-large col-md-4">Apply</a>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
