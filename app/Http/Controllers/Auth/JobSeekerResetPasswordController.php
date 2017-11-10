<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Password;
use Auth;

class JobSeekerResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/jobseeker';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:jobseeker');
    }

    protected function guard(){
        return Auth::guard('jobseeker');
    }

    protected function broker(){
        return Password::broker('jobseekers');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.reset-jobseeker')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
