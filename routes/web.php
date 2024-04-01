<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/contactus', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/offer', function () {
    return view('offer');
});

Route::get('/project', function () {
    return view('project');
});
