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

Route::get('/',[App\Http\Controllers\FrontendController::class, 'index'])->name('home');
Route::get('/login',[App\Http\Controllers\FrontendController::class, 'index']);
Route::post('/appointment/store',[App\Http\Controllers\FrontendController::class, 'storeAppointment'])->name('appointment.store');
Route::post('/message/store', [App\Http\Controllers\FrontendController::class, 'storeMessage'])->name('message.store');
Auth::routes();

Route::group([
    'as' => 'auth.profile.',
    'prefix'=>'auth',
    'middleware'=>['auth:user']],
    function (){
        Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('index');
        Route::get('profile/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('edit');
        Route::post('profile/store', [App\Http\Controllers\ProfileController::class, 'store'])->name('update');
        Route::get('profile/password', [App\Http\Controllers\ProfileController::class, 'password'])->name('password');
        Route::post('profile/password/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('updatePassword');
    }
);

Route::group([
    'as' => 'consultants.',
    'prefix' => 'consultant',
    'namespace' => 'App\Http\Controllers\Consultant',
    'middleware' => ['auth:user']],
    function () {
        Route::get('/dashboard', [App\Http\Controllers\Consultant\DashboardController::class, 'index'])->name('dashboard');
        Route::resource('patients', PatientController::class);
        Route::resource('medical-book', MedicalBookController::class)->except('create');
        Route::get('consultation/create/{patient}', [App\Http\Controllers\Consultant\MedicalBookController::class, 'create'])->name('consultation.create');

    });

Route::group([
    'as' => 'doctors.',
    'prefix' => 'doctor',
    'namespace' => 'App\Http\Controllers\Doctors',
    'middleware' => ['auth:doctor']],
    function () {
        Route::get('/dashboard', [App\Http\Controllers\Doctors\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/doctors/patient', [App\Http\Controllers\Doctors\PatientController::class, 'patient'])->name('patients.index');
        Route::resource('appointment', 'AppointmentController');
        Route::resource('consultation', 'ConsultationController');
    });

Route::group([
    'as' => 'patients.',
    'prefix' => 'patient',
    'namespace' => 'App\Http\Controllers\Patient',
    'middleware' => ['auth:patient']],
    function () {
        Route::get('/dashboard', [App\Http\Controllers\Patients\DashboardController::class, 'index'])->name('dashboard');
    });

// Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
