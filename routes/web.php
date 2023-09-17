<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\LoginController;
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
    return view('welcome');
});
Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/callback', [LoginController::class, 'handleGoogleCallback']);
Route::get('/about', function () {
    return view('about');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $serviceStatus = App\Models\service_status::find(1);
        //dd($serviceStatus);
        return view('dashboard')->with('serviceStatus', $serviceStatus);
    })->name('dashboard');
    Route::get('/apply', function () {
        return view('apply');
    })->name('apply');
    Route::post('/apply/form', [RegisterController::class, 'store'])->name('form.submit');
    Route::post('/1/store', [RegisterController::class, 'store1']);
    Route::get('/1/detail', function (){
        return view('1detail');
    });
});

Route::middleware('role:staff')->group(function () {
    // Routes accessible only to users with the 'staff' role
    Route::get('/admin', function () {
        return view('staff/admin');
    })->name('admin');
    Route::get('/check',[RegisterController::class, 'retrieve']);
    Route::post('/apply/detail', [RegisterController::class, 'detail'])->name('form.detail');
    Route::post('/apply/confirm', [RegisterController::class, 'approve']);
});
