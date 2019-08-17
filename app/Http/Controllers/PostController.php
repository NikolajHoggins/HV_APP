<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posttype(Request $request){
        $id = $request->input('id');
        $posttype = $request->input('posttype');
        $postdata = \App\Post::where('id', $id)->first();
        echo '<p style="color: white">MEMEMEM</p>';
        /*
        if($posttype == 'everything'){
            return view('posttypes.everything')->with('postdata', $postdata);
        }*/
    }
}
