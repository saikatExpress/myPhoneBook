<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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



Route::get('/about', function(){
    return view('about');
});
Route::get('/addcontact', function(){
    return view('addcontact');
});

Route::post('/create-contact', [ContactController::class, 'store'])->name('create-contact');

Route::get('/', function () {
    return view('welcome');
});