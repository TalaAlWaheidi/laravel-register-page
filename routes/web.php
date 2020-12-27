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

Route::get('/form','EmployeeController@user');
Route::get('/user','EmployeeController@show');
Route::post('/user','EmployeeController@index');
Route::get('user/{employee_id}','EmployeeController@delete');
Route::get('edit/{employee_id}','EmployeeController@edit');
Route::post('update/{employee_id}','EmployeeController@update');
