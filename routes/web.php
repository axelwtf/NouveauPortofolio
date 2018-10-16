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

Auth::routes();

Route::get('/','PortofolioController@index');
Route::get('/adminHome', 'AdministrationController@index')->name('home');

Route::get('/adminCreate', function(){
    return view('admin/create');
});

Route::get('/adminEdit', function(){
    return view('admin/edit');
});




//Create,delete,edit,update
Route::post('/create/tasks', 'TaskController@create');
Route::post('/delete/{id}', 'TaskController@destroy');
Route::get('/edit/{id}', 'TaskController@edit');
Route::post('/update/{id}', 'TaskController@update');
Route::post('/deleteLogo/{id}','LogoController@destroy');


//Image intervention Create
Route::post('/Upload_Image', 'LogoController@store');
Route::post('/Upload_Image2', 'SousLogoController@store');
Route::post('/deleteSousLogo/{id}', 'SousLogoController@destroy');

//mails
Route::get('/contact','ContactController@create');
Route::post('/contact_create','ContactController@store');
