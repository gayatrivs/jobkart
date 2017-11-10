<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Job;
use App\Jobprovider;
use App\Application;
use DB;
use Mail;

class ApplicationsController extends Controller
{
    public function apply($id,$provider_id)
    {
    	$job= Job::find($id);
    	$provider=Jobprovider::find($provider_id);
    	$seeker=Auth::guard('jobseeker')->user();

    	$check = DB::table('applications')
    			->where('seeker_id','=',$seeker->id)
    			->where('provider_id','=',$provider->id)
    			->where('job_id','=',$job->id)->get();
    	if(count($check)){
    		return redirect()->back()->with('message','Already applied');
    	}
    	$application = new Application;
    	$application->job_id = $job->id;
    	$application->provider_id = $provider->id;
    	$application->seeker_id = $seeker->id;

    	$application->save();



        Mail::send('mail/application',['user'=>$seeker,'provider'=>$provider,'job'=>$job],function ($m) use ($seeker) {
            $m->from('donotreply@jobkart.com','JobKart');

            $m->to($seeker->email, $seeker->name)->subject('Application received!');
        });

    	return redirect()->back()->with('message','Application sent');
    }

}
