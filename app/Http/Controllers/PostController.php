<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posttype($posttype, $id){

        if($posttype == 'everything'){
            $postdata = \App\Post::where('id', $id)->first();
            return view('posttypes.everything')->with('postdata', $postdata);
        }else{
            return redirect('/');
        }
        /*
        if($posttype == 'everything'){
            return view('posttypes.everything')->with('postdata', $postdata);
        }*/
    }
    public function getposts($amount, $skip){
        $postdata = \DB::table('posts')->latest()->skip($skip)->take($amount)->get();
        return $postdata;
    }
    public function createpost($title){
        $post = new \App\Post;
        $post->title = $title;
        $post->posttype = 1;
        $post->description = ' aijlkasflkjasflkjasf as fafslkafs lkfsa fsa lkfsd lkjsfd lkj fsd';
        $post->employee = 1;
        $post->company = 1;
        $post->save();
        return redirect('/posts/1/1');
    }
}
