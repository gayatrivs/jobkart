<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Jobseeker;
use App\Jobprovider;

class RegisterController extends Controller
{
    public function create_buttons(){
    	return view('auth.registercustom');

    }
	public function create_job_seeker(){
    	return view('auth.jobseekerregister');
    }

    public function create_job_provider(){
    	return view('auth.jobproviderregister');
    }
    

    public function register_job_seeker(Request $request){

    	$jobseeker = new Jobseeker;
    	$jobseeker->name = $request->input('name');
    	$jobseeker->email = $request->input('email');
    	$jobseeker->phoneNo = $request->input('phone_no');
    	$jobseeker->password = Hash::make($request->input('password'));
    	$jobseeker->resume = $request->input('resume');
    	$jobseeker->PHP_HTML_CSS = $request->input('PHP/HTML/CSS');
        $jobseeker->MYSQL_MONGODB = $request->input('MYSQL/MONGODB');
        $jobseeker->JAVA_CPP_C = $request->input('JAVA/CPP/C');
        $jobseeker->HADOOP_TENSORFLOW = $request->input('HADOOP/TENSORFLOW');
        $jobseeker->ANDROID_JS = $request->input('ANDROID/JS');

        $validator = $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:jobseekers',
            'password' => 'required|confirmed|min:6',
            'Terms_and_Conditions' => 'required'
        ]);
    
    	$jobseeker->save();

    	//redirect to home
    	return redirect('/');
    }

    public function register_job_provider(Request $request){
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required|unique:jobproviders',
    		'password' => 'required|confirmed|min:6',
    		'Terms_and_Conditions' => 'required'
    		]);

    	$jobprovider = new Jobprovider;
    	$jobprovider->name = $request->input('name');
    	$jobprovider->email = $request->input('email');
    	$jobprovider->password = Hash::make($request->input('password'));

    	$jobprovider->save();

    	//redirect to home
    	return redirect('/');
    }

}

