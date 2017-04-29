<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tapos', function () {
    return "hello world";
});

Route::get('/hello','HelloController@index');