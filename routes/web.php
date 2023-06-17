<?php

use App\Http\Controllers\BobotSampahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndikatorSampahController;
use App\Http\Controllers\MahasiswaController;
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

/* HOME */
Route::get('/', [HomeController::class, 'login'])->middleware("isLogin")->name("login");
Route::post('/login', [HomeController::class, 'authenticate'])->name("login.proses");
Route::get('/logout', [HomeController::class, 'logout'])->name("logout");
Route::get('/forbidden', [HomeController::class, 'forbidden'])->name("forbidden");


// Yang Sudah Login Admin
Route::group(["middleware" => ["isAdminOrUser"]], function(){
    Route::get('/dashboard',[DashboardController::class, 'index']);
});

// Yang Sudah Login Admin

Route::group(["middleware" => ["isAdmin"]], function(){
    /* Dashboard Admin */
    Route::resource('bobot_sampah', BobotSampahController::class);
});

Route::group(["middleware" => ["isAdmin"]], function(){
    /* Dashboard Admin */
    Route::resource('indikator_sampah', IndikatorSampahController::class);
    Route::delete('/delete-all-data', [IndikatorSampahController::class, 'deleteAllData'])->name('delete-all-data');
});

