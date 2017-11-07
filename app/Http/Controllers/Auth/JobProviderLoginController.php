<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class JobProviderLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest:jobprovider', ['except' => ['logout']]);
	}
    public function showLoginForm(){
    	return view('auth.jobproviderlogin');
    }

    public function login(Request $request){

    	//validate the form data
    	$this->validate($request,[
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);
    		
    	$request->session()->invalidate();
    	//attempt to log the user in

    	if(Auth::guard('jobprovider')->attempt(['email'=> $request->email,'password'=>$request->password], $request->remember))
    	{
     		//if successful then redirect to intended location
    		return redirect()->intended(route('jobprovider.dashboard'));

    	}


    	//if unsuccessful then redirect back to the login with form data

    	return redirect()->back()->withInput($request->only('email','remember'))->with('error','Invalid credentials');
    }

    public function logout(Request $request)
    {
        Auth::guard('jobprovider')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
