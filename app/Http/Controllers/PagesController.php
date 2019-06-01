<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
    	return view('dashboard');
    }

    public function createelection()
    {
    	return view('createelection');
    }

    public function viewelection()
    {
    	return view('viewelection');
    }

    public function sample()
    {
        return view('sample');
    }
}
