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

//----------------------Christian---------------------------
//here
//----------------------------------------------------------

//----------------------Daniel------------------------------
Route::put('/guardar_libro/{uuid}', 'LibrosPutController@__invoke');
Route::post('/update_libro/{uuid}', 'LibrosPostController@__invoke');
Route::delete('/delete_libro/{uuid}', 'LibrosDeleteController@__invoke');
//----------------------------------------------------------

//----------------------Francisco---------------------------
//here
//----------------------------------------------------------

//----------------------Gabriel-----------------------------
//here
//----------------------------------------------------------

//----------------------Gibmyx------------------------------
Route::post("/save_movie", "SaveMoviesController@__invoke");
Route::post("/update_movie", "UpdateMoviesController@__invoke");
Route::post("/delete_movie", "DeleteMoviesController@__invoke");
//----------------------------------------------------------

//----------------------Jose--------------------------------
Route::post("/save_medicine", "SaveMedicineController@__invoke");
Route::post("/update_medicine/{uuid}", "UpdateMedicineController@__invoke");
Route::delete("/delete_medicine/{uuid}", "DeleteMedicineController@__invoke");
//----------------------------------------------------------

Route::post("/save_propuesta", "PropuestaController@save_propuesta");
Route::get("/get_propuestas", "PropuestaController@get_propuestas");
Route::post("/delete_propuesta", "PropuestaController@delete_propuesta");
Route::post("/update_propuesta", "PropuestaController@update_propuesta");
Route::get("/send_propuesta", "PropuestaController@send_propuesta");

Route::get('/{any?}', function (){
    return view('welcome');
})->where('any', '^(?!api\/)[\/\w\.-]*');
