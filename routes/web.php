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
Route::get('/addstaff', function () {
    return view('addstaff');
})->name('addstaff');
Route::get('/staff', function () {
    return view('staff');
})->name("staff");

Route::get('/login', function () {
    return view('Auth.login');
});
Route::get('/register', function () {
    return view('Auth.register');
});
