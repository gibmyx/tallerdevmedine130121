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
Route::post("/save_propuesta", "PropuestaController@save_propuesta");
Route::get("/get_propuestas", "PropuestaController@get_propuestas");
Route::post("/delete_propuesta", "PropuestaController@delete_propuesta");
Route::post("/update_propuesta", "PropuestaController@update_propuesta");
Route::get("/send_propuesta", "PropuestaController@send_propuesta");

Route::get('/{any?}', function (){
    return view('welcome');
})->where('any', '^(?!api\/)[\/\w\.-]*');
