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


Route::get('VerWol', function () {

    $tab1 = DB::table('wolverines')->get();
    $tab2 = DB::table('chimpanzes')->get();
    $tab3 = DB::table('ibexes')->get();

    return $tab1;

    return $tab2;
    return $tab3;
});


Route::post('wol/add',function(Request $request){
    $wolverines = new App/wolverine() ;
    $wolverines->nombre = $request-> input('nombre');
    $wolverines->genero = $request-> input('genero');
    $wolverines->color = $request-> input('color');
    $wolverines->edad = $request-> input('edad');
    $wolverines->animal_id = $request-> input('animal_id');
    $wolverines->save();

    echo 'La ID' .$wolverines;
});










Route::get('/home', 'HomeController@index')->name('home');
