<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Auth;
use DB;

class JobsController extends Controller
{
    
	public function __construct()
    {
        $this->middleware('auth:jobprovider');
    }
    
    public function post_jobs(){
    	return view('jobs.postjob');
    }

    public function create_job(Request $request){
    	$this->validate($request,[
    		'job_title' => 'required',
    		'salary' => 'required',
    		'date' => 'required',
    		'skill'=>'required'
    		]);

    	$job = new Job;
    	$job->job_title = $request->input('job_title');
    	$job->salary = $request->input('salary');
    	$job->job_description = $request->input('description');
    	$job->join_date = $request->input('date');
    	$job->provider_id = Auth::guard('jobprovider')->user()->id;
    	switch ($request->input('skill')) {
    		case 'PHP_HTML_CSS':
    			$job->PHP_HTML_CSS = "yes";
    			break;

    		case 'MYSQL_MONGODB':
    			$job->MYSQL_MONGODB = "yes";
    			break;

    		case 'JAVA_CPP_C':
    			$job->JAVA_CPP_C = "yes";
    			break;

    		case 'HADOOP_TENSORFLOW':
    			$job->HADOOP_TENSORFLOW = "yes";
    			break;
    		
    		case 'ANDROID_JS':
    			$job->ANDROID_JS = "yes";
    			break;
    	}


    	$job->save();

    	return redirect('/jobprovider')->with('message','Job Posted Successfully!');
    }

    public function delete($id){
        DB::table('jobs')->where('id',$id)
                         ->delete();
        return redirect('/jobprovider')->with('message','Job posting deleted');   
    }

}