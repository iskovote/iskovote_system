<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class AdminLoginController extends Controller
{

	public function __contruct()
	{
		$this->middleware('guest:admin');
	}

    public function showLoginForm() 
    {
    	return view('layout.login');
    }

    public function login(Request $request) 
    {
    	//validate form data
    	$this->validate($request , [
    		'username' =>'required|min:5',
    		'password' => 'required|min:6'
    	]);

		//Login attempt
		if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember))
		{
			//if true, redirect to dashboard
			return redirect()->route('admin.dashboard');
		}
		else
			//if false, redirect to login
			return redirect()->back();
    }
}
