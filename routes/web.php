<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MytableController;

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
Route::view('/file1','file01');
Route::view('/main','layouts.main');
// Route::view('/h2','heading2');
Route::view('/h3','heading3')->name("one");

Route::get('index',[MytableController::class,'index'])->name('index');
Route::view('/addRecord','add')->name('add');
Route::post('/store',[MytableController::class,'store'])->name('store');
Route::get('/edit/{id}',[MytableController::class,'edit'])->name('edit');
Route::delete('/delete/{id}',[MytableController::class,'delete'])->name('delete');
Route::post('/update',[MytableController::class,'update'])->name('update');