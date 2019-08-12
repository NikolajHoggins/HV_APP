<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class CvrAuthController extends Controller
{
    //
    public function loginCVR(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        //Findes emailen.
        if(\App\User::where('private_email', $email)->count() > 0){
            //lav account variable
            $account = \App\User::where('private_email', $email)->first();
            //checker om password er det samme som password på accounten.
            if(Hash::check($password, $account->password)){
                //login med id fra account
                Auth::loginUsingId($account->id);
                return redirect('/cardsetup');
            }
            else{
                return redirect('/login?error=login');
            }
        }else{
            return redirect('/login?error=login');
        }
    }
}
