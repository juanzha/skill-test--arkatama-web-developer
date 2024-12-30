<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassengerController;

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





// Rute untuk menampilkan halaman
Route::get('/passengers', [PassengerController::class, 'index'])->name('passengers.index');

// Rute untuk menyimpan data
Route::post('/passengers', [PassengerController::class, 'store'])->name('passengers.store');

// Route::get('/', function () {
//     return view('welcome');
// });
