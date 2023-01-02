<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Auth\RegisterController;
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
    
    return view('/home');}
)->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


Route::get('/demandes', function () {
    return view('demandes.index');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/services', [ServiceController::class, 'index'])->name('service');
Route::post('/services',[ServiceController::class, 'store'])->name('service');
Route::delete('services',[ServiceController::class, 'destroy'])->name('service');

Route::get('/equipes', [EquipeController::class, 'index'])->name('equipe');



Route::get('/employes', [EmployeController::class, 'index'])->name('employe');
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservation');