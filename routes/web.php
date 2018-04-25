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

Route::get('/', function () {
    return view('multiplefiles');
});


Route::get('/event',function(){
    return view('event');
});

Route::get('/addfood',function(){
    return view('addfood');
});

Route::post('/post','EventsController@store');

Route::get('/eventdetails','EventsController@show');

Route::get('/eventslist','EventsListController@showall');

Route::get('/eventslist/{id}','EventInfoController@show');

Route::post('/postrestaurant','AddFoodController@store');

Route::get('/restaurantslist','AddFoodController@index');

Route::get('/restaurantslist/{id}','AddFoodController@show');

Route::get('/index',function(){
    return view('carnival/index');
});

Route::get('/About',function(){
    return view('carnival/about');
});

Route::get('/contact',function(){
    return view('carnival.contact');
});

Route::get('/carnivaldates',function(){
    return view('carnival.carnivaldates');
});

Route::get('/carnivalguidemodelapp',function(){
    return view('carnival.carnivalguidemodelapp');
});

Route::get('/carnivalguidemodel',function(){
    return view('carnival.carnivalguidemodel');
});

Route::get('/toronto',function(){
    return view('carnival.torontocarnival');
});

//testing for details pages
Route::get('/details',function(){
    return view('restdetails');
});



