<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Job;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
        $this->middleware(['auth', 'verified']);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(auth::user()->user_type=='employer'){
            return redirect()->to('/company/dashboard');
        }
         $adminRole = Auth::user()->roles()->pluck('name');
            if($adminRole->contains('admin')){
                return redirect('/dashboard');
            }




        $jobs  = Auth::user()->favorites;
        return view('profile.userdashboard',compact('jobs'));
    }
}
