<?php

Route::get('/', function () {
    return view('welcome');
});
//
//Route::get('/tapos', function () {
//    return "hello world";
//});
//
//Route::get('/hello','HelloController@index');

Route::get('/department','DepartmentController@index');
Route::post('/department/store','DepartmentController@store');