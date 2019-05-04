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
  // Authentication Routes
  Route::get('auth/login', 'Auth\LoginController@getLogin')->name('login');
  Route::post('login', 'Auth\LoginController@login')->name('successful.login');
  Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
  // Registration Routes
  Route::get('auth/register', 'Auth\RegisterController@make')->name('register');
  Route::post('store', 'Auth\RegisterController@create')->name('register.store');

  Route::get('/', 'PagesController@getHome'); //to welcome page
  Route::get('/home', 'HomeController@index')->name('home');
  // Route::get('/auth/login', 'PagesController@getLogin'); //to page saying login successful
  Route::get('/home', 'PagesController@getLoginSuccess'); //to page saying login successful
  // Route::get('/auth/register','Auth\RegisterController@register');
  Route::get('/welcome', 'PagesController@getLogout'); //returns to Welcome page if login is successful
  Route::get('/word', 'PagesController@getWord');
  Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

  Route::resource('/word', 'WordController');
  Route::post('/word.store', 'WordController@store');
  Route::post('/word.create', 'WordController@create');
  Route::post('/word.index', 'WordController@index');
  Route::get('/word/{id}/show', 'WordController@show');
  Route::get('/word/{id}/edit', 'WordController@edit');
  Route::get('/word/{id}/index', 'WordController@index');
  Route::put('/word/{id}/update', 'wordController@update');
  Route::put('//word/{id}/destroy', 'WordController@delete');

  Route::get('word', function(){
    $words = DB::table('words')->get();
    return view('word', ['words'=>$words]);
  });

  Form::token();
  // Auth::routes();
