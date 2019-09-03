<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function archive()
    {
    	return view('admin.viewelection');
    }

    public function editelection()
    {
        return view('admin.editelection');
    }

    public function help_a()
    {
        return view('admin.adminhelp');
    }

    public function userlogin()
    {
        return view('user.userlogin');
    }

    public function votenow()
    {
        return view('user.votenow');
    }
      public function VElection()
    {
        return view('user.VElection');
    }
      public function changepass()
    {
        return view('user.changepass');
    }
      public function helpuser()
    {
        return view('user.helpuser');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function adminlog()
    {
        return view('layout.login');
    }
    public function home()
    {
        return view('user.home');
    }
    public function result()
    {
        return view('admin.result');
    }

}
