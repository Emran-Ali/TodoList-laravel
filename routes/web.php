<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoListController;
use App\Http\Controllers\TestUserController;

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

Route::get('/test2', function()
{
    return View::make('pages.home');
});

Route::get('/about', function()
{
    return View::make('pages.contact');
});
Route::get('/table/{number?}', function ($number = 2) {
    for($i =1; $i <= 10 ; $i++){
        echo "$i * 2 = ". $i*$number ."<br>";
    }
});

//user section
Route::get('/user', [TestUserController::class, 'index'] );
Route::post('user/store', [TestUserController::class, 'store'])->name('store');
Route::post('user/check/{age}', [TestUserController::class, 'check'])->name('check')->middleware('testMid:{{$age}}');

Route::get('/', [todoListController::class, 'index']);
Route::view('/test', 'test');
Route::post('/saveItem', [todoListController::class, 'saveItem'])->name('saveItem');
Route::post('/markDone/{id}', [todoListController::class, 'markDone'])->name('markDone');

