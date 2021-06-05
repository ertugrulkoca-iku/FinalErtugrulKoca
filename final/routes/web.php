<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',function(){
    return view('student');
});

Route::get('/studentsave', [StudentController::class, 'ogrencikayitform'])->name('ogrencikayitform');

Route::post('/ogrencikayit', [StudentController::class, 'ogrencikayit'])->name('ogrencikayit');