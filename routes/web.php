<?php

use App\Http\Controllers\TestController;
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
    return view('client.index');
});


Route::get('/', [TestController::class, 'index'])->name('index');
Route::get('/chitiet', [TestController::class, 'chitiet'])->name('chitiet');
Route::get('/listdanhsach', [TestController::class, 'listdanhsach'])->name('listdanhsach');
Route::get('/lienhe', [TestController::class, 'lienhe'])->name('lienhe');
