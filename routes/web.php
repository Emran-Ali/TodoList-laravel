<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoListController;

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

Route::get('/', [todoListController::class, 'index']);
Route::post('/saveItem', [todoListController::class, 'saveItem'])->name('saveItem');
Route::post('/markDone/{id}', [todoListController::class, 'markDone'])->name('markDone');

