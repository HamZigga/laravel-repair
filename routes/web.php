<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatementController;


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
    return view('main');
})->name('main');
Route::get('/statements/create', [StatementController::class, 'create'])->name('statement.create');
Route::get('/statements', [StatementController::class, 'show'])->name('statement');
Route::post('/statements/create/submit', [StatementController::class, 'store'])->name('statement.store');
Route::get('/statements/count', [StatementController::class, 'count'])->name('statement.count');
require __DIR__.'/auth.php';
