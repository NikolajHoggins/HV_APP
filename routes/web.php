<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return redirect('/posts/1/1');
});
Route::get('/posts/{pagetype}/{pagenr}', 'HomeController@posts');

Auth::routes();


// CVR Auth //

Route::post('/cvrlogin', 'CvrAuthController@loginCVR');

Route::post('/updateProfile', 'CvrAuthController@updateProfile');

Route::get('/profile', 'HomeController@profile')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

// Post Routes //

Route::get('/createpost/{title}', 'PostController@createpost');
Route::get('/getposts/{amount}/{skip}', 'PostController@getposts');



//Test routes

Route::get('/cardsetup', 'testingController@cardsetup');

Route::get('/test/{number}', 'testingController@meme');


