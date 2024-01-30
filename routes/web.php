<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProgramBahasaController;
use App\Http\Controllers\ProgramComputerController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/tentang', [HomeController::class, 'about']);
Route::get('/goals', [HomeController::class, 'goals']);
Route::get('/layanan', [HomeController::class, 'service']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/program/computer', [ProgramComputerController::class, 'index'])->middleware('auth');
Route::get('/program/computer/create', [ProgramComputerController::class, 'create'])->middleware('auth');
Route::post('/program/computer', [ProgramComputerController::class, 'store'])->middleware('auth');
Route::get('/program/computer/{program_computer}/edit', [ProgramComputerController::class, 'edit'])->middleware('auth');;
Route::put('/program/computer/{program_computer}', [ProgramComputerController::class, 'update'])->middleware('auth');;
Route::delete('/program/computer/{program_computer}', [ProgramComputerController::class, 'destroy'])->middleware('auth');;
Route::get('/program/computer/search', [ProgramComputerController::class, 'search'])->middleware('auth');

Route::get('/program/bahasa', [ProgramBahasaController::class, 'index'])->middleware('auth');

Route::get('/auth/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/auth/login', [AuthController::class, 'authenticate']);
Route::post('/auth/logout', [AuthController::class, 'logout']);
Route::get('/auth/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/auth/register', [AuthController::class, 'store']);



Route::post('/likes', [LikeController::class, 'plus']);
