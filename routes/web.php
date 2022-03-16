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
    return view('frontend.home');
});

Auth::routes();

Route::group([
    'as' => 'doctors.',
    'prefix' => 'doctor',
    'namespace' => 'App\Http\Controllers\Doctors',
    'middleware' => ['auth:doctor']],
    function () {
        Route::get('/dashboard1', [App\Http\Controllers\Doctors\DashboardController::class, 'index'])->name('dashboard');
    });



Route::group([
    'as' => 'consultants.',
    'prefix' => 'consultant',
    'namespace' => 'App\Http\Controllers\Consultant',
    'middleware' => ['auth:user']],
    function () {
        Route::get('/dashboard', [App\Http\Controllers\Consultant\DashboardController::class, 'index'])->name('dashboard');
    });

Route::group([
    'as' => 'patients.',
    'prefix' => 'patient',
    'namespace' => 'App\Http\Controllers\Patient',
    'middleware' => ['auth:patient']],
    function () {
        Route::get('/dashboard3', [App\Http\Controllers\Patients\DashboardController::class, 'index'])->name('dashboard');
    });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
