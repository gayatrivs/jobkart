<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create_buttons(){
    	return view('auth.logincustom');
    }
}
