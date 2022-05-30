<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth/register');
});

Route::get('/c', function () {
    return view('entreprises/create');
});

Route::get('/newAdmin', function () {
    return view('newAdmin');
});

Route::get('/newEntreprise', function () {
    return view('newEntreprise');
});


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource("entreprises", EntrepriseController::class);

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin', function () {
        return view('admin');
    });
});

require __DIR__.'/auth.php';
