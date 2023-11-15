<?php

use App\Http\Controllers\CustomController\fortifyController;
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

//custom routes
Route::get('/home',[fortifyController::class,'viewHome'])->name('view_home');
Route::get('/logout',[fortifyController::class,'logout'])->name('logout');