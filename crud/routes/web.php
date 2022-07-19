<?php

use App\Http\Controllers\UserController;
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

Route::get('create', function () {
    return view('create');
});

Route::post('createForm', [UserController::class, 'createUser']);
Route::get('/', [UserController::class, 'getUser']);
Route::post('/{user}/delete', [UserController::class, 'deleteUser']);
Route::get('/{user}',[UserController::class, 'edit']);
Route::post('/{user}',[UserController::class, 'edituser']);
// Route::post('delete', [UserController::class, 'deleteUser']);