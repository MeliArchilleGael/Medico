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
    'middleware'=>['auth:doctor,user,patient']],
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

        Route::get('consultation/done', [App\Http\Controllers\Doctors\ConsultationController::class, 'done'])->name('consultation.done');
        Route::get('consultation/waiting', [App\Http\Controllers\Doctors\ConsultationController::class, 'waiting'])->name('consultation.waiting');
        Route::resource('consultation', 'ConsultationController');

        Route::resource('medical-book', MedicalBookController::class)->except('create');
        Route::get('consultation/create/{patient}', [App\Http\Controllers\Doctors\MedicalBookController::class, 'create'])->name('consultation.create');

        Route::resource('exam', ExamController::class)->except(['create', 'index']);

        Route::get('patient/department/all', [App\Http\Controllers\Doctors\DepartmentController::class, 'all'])->name('patient.all');
        Route::get('patient/department/receive', [App\Http\Controllers\Doctors\DepartmentController::class, 'receive'])->name('patient.receive');
        Route::get('patient/department/waiting', [App\Http\Controllers\Doctors\DepartmentController::class, 'waiting'])->name('patient.waiting');
    });

Route::group([
    'as' => 'patients.',
    'prefix' => 'patient',
    'namespace' => 'App\Http\Controllers\Patients',
    'middleware' => ['auth:patient']],
    function () {
        Route::get('/dashboard', [App\Http\Controllers\Patients\DashboardController::class, 'index'])->name('dashboard');

        Route::get('consultation', [App\Http\Controllers\Patients\ConsultationController::class, 'index'])->name('consultation.index');
        Route::get('consultation/done', [App\Http\Controllers\Patients\ConsultationController::class, 'done'])->name('consultation.done');
        Route::get('consultation/waiting', [App\Http\Controllers\Patients\ConsultationController::class, 'waiting'])->name('consultation.waiting');

        Route::get('patients/medical-book', [App\Http\Controllers\Patients\MedicalBookController::class, 'index'])->name('medical-book.index');

        Route::resource('appointment', 'AppointmentController');
    });

// Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
