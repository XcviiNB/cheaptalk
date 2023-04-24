<?php

use App\Http\Controllers\AuthenticationController;
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

Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::get('/register', [AuthenticationController::class, 'register'])->name('register');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('create');
    });
    Route::get('/posts', function() {
        return view('posts');
    });
    Route::get('/categories', function() {
        return view('category');
    });
});
