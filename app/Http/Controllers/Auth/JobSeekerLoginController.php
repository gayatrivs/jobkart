<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class JobSeekerLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest:jobseeker', ['except' => ['logout']]);
	}
    public function showLoginForm(){
    	return view('auth.jobseekerlogin');
    }

    public function login(Request $request){
    	//validate the form data 
    	$this->validate($request,[
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);
    		
    	//clear any existing session
        $request->session()->invalidate();
    	//attempt to log the user in

    	if(Auth::guard('jobseeker')->attempt(['email'=> $request->email,'password'=>$request->password], $request->remember))
    	{
     		//if successful then redirect to intended location
    		return redirect()->intended(route('jobseeker.dashboard'));

    	}


    	//if unsuccessful then redirect back to the login with form data

    	return redirect()->back()->withInput($request->only('email','remember'))->with('error','Invalid credentials');
    }

    public function logout(Request $request)
    {
        Auth::guard('jobseeker')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
