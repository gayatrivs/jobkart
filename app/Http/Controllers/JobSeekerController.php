<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class JobSeekerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:jobseeker');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::guard('jobseeker')->user();
        $jobs = DB::table('jobs')
        ->join('jobproviders','jobs.provider_id','=','jobproviders.id')
        ->where(function ($query) use ($user){
                $query->where('PHP_HTML_CSS','=',$user->PHP_HTML_CSS)
                      ->whereNotNull('PHP_HTML_CSS');
        })
        ->orWhere(function ($query) use ($user){
                $query->where('MYSQL_MONGODB','=',$user->MYSQL_MONGODB)
                      ->whereNotNull('MYSQL_MONGODB');
        })
        ->orWhere(function ($query) use ($user){
                $query->where('JAVA_CPP_C','=',$user->JAVA_CPP_C)
                      ->whereNotNull('JAVA_CPP_C');
        })
        ->orWhere(function ($query) use ($user){
                $query->where('HADOOP_TENSORFLOW','=',$user->HADOOP_TENSORFLOW)
                      ->whereNotNull('HADOOP_TENSORFLOW');
        })
        ->orWhere(function ($query) use ($user){
                $query->where('ANDROID_JS','=',$user->ANDROID_JS)
                      ->whereNotNull('ANDROID_JS');
        })
        ->select('jobs.id as id','jobproviders.id as provider_id','PHP_HTML_CSS as PHP_HTML_CSS','MYSQL_MONGODB as MYSQL_MONGODB','JAVA_CPP_C as JAVA_CPP_C','HADOOP_TENSORFLOW as HADOOP_TENSORFLOW','ANDROID_JS as ANDROID_JS','jobproviders.name as provider_name','job_title as job_title','salary as salary','join_date as join_date','job_description as job_description')
        ->get();
        if(!count($jobs)){
          return view('jobseeker')->with('message','No job listings available for you right now. Please try again later!')->with('jobs',$jobs);
        }
        return view('jobseeker')->with('jobs',$jobs);
    }
}
