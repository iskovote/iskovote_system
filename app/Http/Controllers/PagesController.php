<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
    	return view('dashboard');
    }

    public function managestudents()
    {
    	return view('managestudents');
    }

    public function managepositions()
    {
    	return view('managepositions');
    }

        public function managecourses()
    {
    	return view('managecourses');
    }

        public function managepartylists()
    {
    	return view('managepartylists');
    }

    public function createelection()
    {
    	return view('createelection');
    }

    public function viewelection()
    {
    	return view('viewelection');
    }
}
