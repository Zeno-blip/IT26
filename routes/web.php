<?php

use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [HomeController::class, 'register']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/payroll', function () {
    return view('payroll');
});

Route::get('/employee', function () {
    return view('employee');
});

Route::get('/add-employee', function () {
    return view('add-employee');
});
Route::get('/audit-log', function () {
    return view('audit-log');
});
Route::get('/applicant', function () {
    return view('applicant');
});

Route::post('/logout', [HomeController::class, 'logout']);

Route::post('/login', [HomeController::class, 'login']);

