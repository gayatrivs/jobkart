@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <br><br><br><br><br><br><br><br>
            <div class="panel panel-default">
                <div class="panel-heading"><h5>Hello {{ Auth::guard('jobprovider')->user()->name }}!</h5></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('inc.messages')
                    <a href="/postjobs" class="btn btn-large col-md-4 col-md-offset-1">Post a new job</a>
                    <a href="/viewapplications" class="btn btn-large col-md-4 col-md-offset-2">View Job Applications</a><br>
                    

                    <br><br><br>
                    My job postings:<br><br>
                    @foreach($postings as $job)
                        <div class="panel panel-info">
                            <div class="panel-heading">{{ $job->job_title }}</div>
                            <div class="panel-body">
                                Salary: {{ $job->salary }}<br>
                                Joining date: {{ $job->join_date }}<br>
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
                                <a href="/delete/{{$job->id}}" class="btn btn-danger pull-right">Delete</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
