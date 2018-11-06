<?php
use Illuminate\Http\Request;
use App\wolverine;
use App\marten;
use App\ibex;
use App\hyena;
use App\chimpanze;
use App\budgeringar;
use App\Animal;

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


Route::get('VerChim', function () {
    $tab1 = DB::table('chimpanzes')->get();
    return $tab1;
});

Route::get('VerWol', function () {

    $tab1 = DB::table('wolverines')->get();

    return $tab1;
});





Route::get('VerTodos', function () {
    $tab1 = DB::table('chimpanzes')->get();
    $tab2 = DB::table('hyenas')->get();
    $tab3 = DB::table('ibexes')->get();
    $tab4 = DB::table('budgeringars')->get();
    $tab5 = DB::table('wolverines')->get();
    $tab6 = DB::table('martens')->get();

    return $tab1.$tab2.$tab3.$tab4.$tab5.$tab6;
});


Route::post('wol/add',function(Request $request){
    $wolverines = new App/wolverine ;
    $wolverines->nombre = $request-> input('nombre');
    $wolverines->genero = $request-> input('genero');
    $wolverines->color = $request-> input('color');
    $wolverines->edad = $request-> input('edad');
    $wolverines->animal_id = $request-> input('animal_id');
    $wolverines->save();

    echo 'La ID ' .$wolverines;
});










Route::get('/home', 'HomeController@index')->name('home');
