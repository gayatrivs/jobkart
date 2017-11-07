@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <br><br><br><br><br><br><br><br>
            <div class="panel panel-default">
                <div class="panel-heading text-center">Job Applications</div><br>
                <div class="panel-body">
                @foreach($applications as $app)
                <div class="panel panel-info">
                    <div class="panel-heading">{{ $app->seeker_name }}</div>
                    <div class="panel-body">
                    	Email-id: {{ $app->email }}<br>
                        Phone no: {{ $app->phoneNo }}<br>
                        Applying for: {{ $app->job_title }}<br>
                        CTC: {{ $app->salary }}<br>
                        Resume: <br>{{ $app->resume}}<br>
                    </div>
                </div>
            	@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection