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
    return view('addcostume');
});
Route::get('/Admin', function () {
    return view('AdminAdd');
});

// Route::get('/','BannerController@index');

Route::get('/addevent',function(){
    return view('event');
});

Route::get('/addfood',function(){
    return view('addfood');
});

Route::get('/addband',function(){
    return view('addband');
});

Route::get('/addbanner',function(){
    return view('postbanners');
});


Route::post('/postcostume','CostumeController@store');

Route::get('/costumeslist','CostumeController@index');

Route::get('/costumeslist/{id}','CostumeController@show');


Route::post('/postbanner','BannerController@store');

Route::post('/post','EventsController@store');

Route::get('/eventdetails','EventsController@show');

Route::get('/eventslist','EventsListController@showall');

Route::get('/eventslist/{id}','EventInfoController@show');

Route::post('/postrestaurant','AddFoodController@store');

Route::post('/postband','BandController@store');

Route::get('/bandslist','BandController@index');

Route::get('/bandslist/{id}','BandController@show');
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

Route::get('/Toronto_Caribbean_Carnival',function(){
    return view('carnival.torontocarnival');
});

//testing for details pages
Route::get('/details',function(){
    return view('restdetails');
});



