<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class JobProviderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:jobprovider');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postings = DB::table('jobs')
            ->where('provider_id',Auth::guard('jobprovider')->user()->id)->get();
        return view('jobprovider')->with('postings',$postings);
    }

    public function viewapplications(){
        $user = Auth::guard('jobprovider')->user();
        $applications = DB::table('applications')
                   ->where('applications.provider_id',$user->id)
                   ->join('jobs',function ($join){
                        $join->on('jobs.provider_id','applications.provider_id')
                             ->on('jobs.id','applications.job_id');
                   })
                   //->get();
                   ->join('jobseekers',function ($join){
                        $join->on('jobseekers.id','applications.seeker_id');
                   })
                   //->where('applications.provider_id',$user->id)
                   ->select('jobs.id as id','jobs.job_title','jobs.salary','jobs.join_date','jobseekers.name as seeker_name','jobseekers.email','jobseekers.phoneNo','jobseekers.resume')
                   ->get();

        //dd($seekers);
        //dd($applications);
        return view('jobs.applications')->with('applications',$applications);
    }

}
