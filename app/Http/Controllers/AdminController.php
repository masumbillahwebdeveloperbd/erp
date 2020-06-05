<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class AdminController extends Controller
{
	public function __construct(){
		$this->middleware('auth:admin');
	}

    public function dashboard(){

    	return view('admins.pages.dashboard');
    }

     public function logout(){
	        Auth::guard('admin')->logout();
	        return redirect()->route('admin_login');
    }
}
