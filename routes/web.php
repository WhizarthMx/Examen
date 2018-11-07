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

/// ibex ///
Route::get('Veribex', function () {
    $tab1 = DB::table('ibexes')->get();
    return $tab1;
});

Route::post('ibex/add',function(Request $request){
    $ibexes = new ibex ;
    $ibexes->nombre = $request-> input('nombre');
    $ibexes->genero = $request-> input('genero');
    $ibexes->color = $request-> input('color');
    $ibexes->edad = $request-> input('edad');
    $ibexes->animal_id = $request-> input('animal_id');
    $ibexes->save();
    echo 'La ID ' .$ibexes;
});

Route::put('Hyena/update/{id}' , function (Request $request , $id){
    $ibexes = ibex::find($id);
    $ibexes->nombre = $request-> input('nombre');
    $ibexes->genero = $request-> input('genero');
    $ibexes->color = $request-> input('color');
    $ibexes->edad = $request-> input('edad');
    $ibexes->animal_id = $request-> input('animal_id');
    $ibexes->save();
    echo 'La ID ' .$ibexes;
});




/// hyena ///

Route::get('Verhyena', function () {
    $tab1 = DB::table('hyenas')->get();
    return $tab1;
});

Route::post('Hyena/add',function(Request $request){
    $hyenas = new hyena ;
    $hyenas->nombre = $request-> input('nombre');
    $hyenas->genero = $request-> input('genero');
    $hyenas->color = $request-> input('color');
    $hyenas->edad = $request-> input('edad');
    $hyenas->animal_id = $request-> input('animal_id');
    $hyenas->save();
    echo 'La ID ' .$hyenas;
});


Route::put('Hyena/update/{id}' , function (Request $request , $id){
    $hyenas = hyena::find($id);
    $hyenas->nombre = $request-> input('nombre');
    $hyenas->genero = $request-> input('genero');
    $hyenas->color = $request-> input('color');
    $hyenas->edad = $request-> input('edad');
    $hyenas->animal_id = $request-> input('animal_id');
    $hyenas->save();
    echo 'La ID ' .$hyenas;
});

Route::get('Hyena/delete/{id}', function ($id) {
    hyena::destroy($id);
    return 'hyenas'.$id.' deleted';
});


//// chimpanze /////

Route::get('Verchimp', function () {
    $tab1 = DB::table('chimpanzes')->get();
    return $tab1;
});

Route::post('Chimp/add',function(Request $request){
    $chimpanzes = new chimpanze ;
    $chimpanzes->nombre = $request-> input('nombre');
    $chimpanzes->genero = $request-> input('genero');
    $chimpanzes->color = $request-> input('color');
    $chimpanzes->edad = $request-> input('edad');
    $chimpanzes->animal_id = $request-> input('animal_id');
    $chimpanzes->save();
    echo 'La ID ' .$chimpanzes;
});


Route::put('Chimp/update/{id}' , function (Request $request , $id){
    $chimpanzes = chimpanze::find($id);
    $chimpanzes->nombre = $request-> input('nombre');
    $chimpanzes->genero = $request-> input('genero');
    $chimpanzes->color = $request-> input('color');
    $chimpanzes->edad = $request-> input('edad');
    $chimpanzes->animal_id = $request-> input('animal_id');
    $chimpanzes->save();
    echo 'La ID ' .$chimpanzes;
});

Route::get('Chimp/delete/{id}', function ($id) {
    chimpanze::destroy($id);
    return 'chimpanze'.$id.' deleted';
});


 //// Budgeringar ////
Route::get('VerBudg', function () {
    $tab1 = DB::table('budgeringars')->get();
    return $tab1;
});

Route::post('Budg/add',function(Request $request){
    $budgeringars = new budgeringar ;
    $budgeringars->nombre = $request-> input('nombre');
    $budgeringars->genero = $request-> input('genero');
    $budgeringars->color = $request-> input('color');
    $budgeringars->edad = $request-> input('edad');
    $budgeringars->animal_id = $request-> input('animal_id');
    $budgeringars->save();
    echo 'La ID ' .$budgeringars;
});

Route::put('Budg/update/{id}' , function (Request $request , $id){
    $budgeringars = budgeringar::find($id);
    $budgeringars->nombre = $request-> input('nombre');
    $budgeringars->genero = $request-> input('genero');
    $budgeringars->color = $request-> input('color');
    $budgeringars->edad = $request-> input('edad');
    $budgeringars->animal_id = $request-> input('animal_id');
    $budgeringars->save();
    echo 'La ID ' .$budgeringars;
});

Route::get('/Budg/delete/{id}', function ($id) {
    budgeringar::destroy($id);
    return 'Budgeringar'.$id.' deleted';
});

/////  Wolverines ///////

Route::get('VerWol', function () {
    $tab1 = DB::table('wolverines')->get();
    return $tab1;
});

Route::put('wol/update/{id}' , function (Request $request , $id){
    $wolverines = wolverine::find($id);
    $wolverines->nombre = $request-> input('nombre');
    $wolverines->genero = $request-> input('genero');
    $wolverines->color = $request-> input('color');
    $wolverines->edad = $request-> input('edad');
    $wolverines->animal_id = $request-> input('animal_id');
    $wolverines->save();

    echo 'La ID ' .$wolverines;
});


Route::post('wol/add',function(Request $request){
    $wolverines = new wolverine ;
    $wolverines->nombre = $request-> input('nombre');
    $wolverines->genero = $request-> input('genero');
    $wolverines->color = $request-> input('color');
    $wolverines->edad = $request-> input('edad');
    $wolverines->animal_id = $request-> input('animal_id');
    $wolverines->save();
    echo 'La ID ' .$wolverines;
});



Route::get('/wol/delete/{id}', function ($id) {
    wolverine::destroy($id);
    return 'wolverine'.$id.' deleted';
});

Route::get('/wol/search/{id}', function ($id) {
   $sh= wolverines::find($id);
    return $sh;
});









Route::get('/home', 'HomeController@index')->name('home');
