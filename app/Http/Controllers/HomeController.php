<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
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
    public function profile()
    {
        return view('profile');
    }
    public function home(){
        $postdata = \App\Post::all();
        return view('posts')->with('posts', $postdata);
    }
    public function posts($pagetype, $pagenr){
        $user = Auth::user();
        $postcount = \App\Post::all()->count();
        $postmax = 2;
        $pagecount = ceil($postcount / $postmax);
        $skipcount = $pagenr-1;
        $skipcount = $postmax*$skipcount;
        $postdata = \DB::table('posts')->latest()->where('posttype', $pagetype)->skip($skipcount)->take($postmax)->get();
        $employees = \App\Employee::where('company_id', $user->id)->get();
        return view('posts')->with('posts', $postdata)->with('pagecount', $pagecount)->with('pagenr', $pagenr)->with('employees', $employees);


    }


}
