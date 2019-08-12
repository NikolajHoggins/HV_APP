<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testingController extends Controller
{
	public function cardSetup(){
		return view('testviews.cardsetup');
	}

	public function meme($number){
		$dbcontrol = new \App\number;
		$dbcontrol->number = $number;
		$dbcontrol->save();
		return $number;
	}
}
