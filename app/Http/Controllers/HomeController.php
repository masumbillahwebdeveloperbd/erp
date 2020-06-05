<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       /* $this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }



   public function admin_login(){
      return view('admin_login');
   }


   public function admin_login_submit(Request $request){

      $this->validate($request,[
      'email'=>'required|email',
      'password'=>'required'
    ]);

    if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            return redirect()->route('dashboard');
          }
    
       return redirect()->back()->withInput($request->only('email','remember'));

   }



}


