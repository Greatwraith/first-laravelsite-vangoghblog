<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about', ['name' => 'Ardhan(web owner)']);
});

Route::get('/vangogh', function () {
    return view('vangogh');
});


// MAKE 2 ROUTES
// 2 BLOG PAGES
// a title, an article content
// /contact
// email
