<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TaskController;

const CONTACT_PATH = App\Http\Controllers\ContactsController::class;
const CONTACT_PATH2 = App\Http\Controllers\TaskController::class;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [NewsController::class, 'index']);

});

Auth::routes();
Route::get('/home', [App\Http\Controllers\NewsController::class, 'index']);

Route::get('/home', [App\Http\Controllers\NewsController::class, 'index']);
