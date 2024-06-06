<?php

use App\Http\Controllers\UsersController;
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
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/staff', function () {
    return view('staff');
})->name("staff");
<<<<<<< HEAD
Route::get('/patient', function () {
    return view('patient');
})->name("patient");

=======
Route::get('/addpatient', function () {
    return view('addpatient');
})->name("addpatient");
>>>>>>> 64cde64c6c9e93a85671166af4cb6686c7b48ebe
Route::get('/login', function () {
    return view('Auth.login');
})->name('login');
Route::get('/register', function () {
    return view('Auth.register');
})->name('register');


Route::post('userdata',[UsersController::class, 'insert'])->name('save');


Route::get('fetch',[UsersController::class,'myuser'])->name('fetch');
