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
Route::get('/addcostume', function () {
    return view('addcostume');
});
Route::get('/Admin', function () {
    return view('AdminAdd');
});

Route::get('/addfood', function () {
    return view('addfood');
});

Route::get('/addband',function(){
    return view('addband');
});

Route::get('/addevent',function(){
    return view('event');
});

Route::get('/addpackage', function () {
    return view('addpackage');
}); 


Route::get('/addbanner',function(){
    return view('postbanners');
});

//Route::get('/','MainController@index');

Route::get('/{country}','MainController@show');


Route::post('/postpackage','PackageController@store');

Route::get('{country}/packageslist','PackageController@index');

Route::get('{country}/packageslist/{id}','PackageController@show');


Route::post('/postcostume','CostumeController@store');

Route::get('/{country}/costumeslist','CostumeController@index');

Route::get('/{country}/costumeslist/{id}','CostumeController@show');

Route::post('/postbanner','BannerController@store');

Route::post('/post','EventsController@store');

Route::get('/eventdetails','EventsController@show');

Route::get('/{country}/eventslist','EventController@index');

// Route::get('/eventslist','EventsListController@showall');

Route::get('/{country}/eventslist/{id}','EventController@show');

Route::post('/postrestaurant','AddFoodController@store');

Route::post('/postband','BandController@store');
Route::get('/{country}/bandslist','BandController@index');
//Route::get('/bandslist','BandController@index');

Route::get('/{country}/bandslist/{id}','BandController@show');
Route::get('/{country}/restaurantslist','AddFoodController@index');

Route::get('/{country}/restaurantslist/{id}','AddFoodController@show');

Route::get('/index',function(){
    return view('carnival/index');
});

// Route::get('/index',function(){
//     return 123;
// });

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

// Route::get('/Toronto_Caribbean_Carnival',function(){
//     return view('carnival.torontocarnival');
// });

// Route::get('/Crop_Over',function(){
//     return view('carnival.barbadoscarnival');
// });

// Route::get('/Guyana_Carnival',function(){
//     return view('carnival.guyanacarnival');
// });

// Route::get('/Saint_Lucia_Carnival',function(){
//     return view('carnival.luciascarnival');
// });

//testing for details pages
Route::get('/details',function(){
    return view('restdetails');
});



