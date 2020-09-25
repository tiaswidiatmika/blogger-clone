<?php

use App\Http\Controllers\PersonalController;
use App\Http\Controllers\BlogController;
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
    return view('welcome');
});
Route::get('/personal-info', [PersonalController::class, 'index'])->name('form-personal');
Route::post('/personal-info', [PersonalController::class, 'store']);
Route::get('/blog', [BlogController::class, 'index']);
Route::post('/blog', [BlogController::class, 'store'])->name('post-a-blog');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
