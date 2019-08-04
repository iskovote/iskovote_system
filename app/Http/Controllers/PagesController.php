<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
    	return view('admin.dashboard');
    }

    public function createelection()
    {
    	return view('admin.createelection');
    }

    public function archive()
    {
    	return view('admin.viewelection');
    }

    public function home()
    {
        return view('user.home');
    }

    public function login()
    {
        return view('layout.login');
    }

    public function editelection()
    {
        return view('admin.editelection');
    }

    public function help_a()
    {
        return view('admin.adminhelp');
    }
}
