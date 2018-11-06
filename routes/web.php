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
    return view('welcome');
});

Auth::routes();


Route::get('VerWol', function () {

    $tab1 = DB::table('wolverines')->get();
    $tab2 = DB::table('chimpanzes')->get();
    $tab3 = DB::table('ibexes')->get();

    return $tab1;
    return $tab2;
    return $tab3;

});




Route::get('/home', 'HomeController@index')->name('home');
