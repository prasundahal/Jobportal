<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;
use App\Employer;
use Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EmployerRegisterController extends Controller
{

    public function employerRegister(Request $request){

        $this->validate($request,[
            'cname'=>'required|string|max:60',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:8|confirmed'
        ]);

    	 $employers = ([
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'user_type' => request('user_type'),
        ]);
        DB::table('employers')->insert($employers);
        Company::create([
                'employer_id' => $employers->id,
                'cname' => request('cname'),
                'slug'=>str_slug(request('cname'))

            ]);
        $user->sendEmailVerificationNotification();

        return redirect()->back()->with('message','A verification link is sent to your email. Please follow the link to verify it');


    }
}
