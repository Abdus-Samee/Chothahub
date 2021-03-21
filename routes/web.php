<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FolderController;

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

Route::resource('files', DocumentController::class);

Route::get('/file/download/{file}', [DocumentController::class, 'download']);

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/folder/{id}', [FolderController::class, 'index']);

Route::post('/notice', [FolderController::class, 'notice']);

Route::post('/markRead', [DashboardController::class, 'markRead']);
