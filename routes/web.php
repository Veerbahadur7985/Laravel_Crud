<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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
    return view('welcome');
});
Route::get('list',[MemberController::class,'show']);
Route::view('add','add');
Route::post('add',[MemberController::class,'addData']);
Route::get('del',[MemberController::class,'del']);
Route::get('delete/{id}',[MemberController::class,'delete']);
Route::post('edit',[MemberController::class,'update']);
Route::get('edit/{id}',[MemberController::class,'showData']);