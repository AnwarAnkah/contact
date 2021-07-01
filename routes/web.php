<?php

use App\Http\Controllers\contactcontroller;
use App\Models\contact;
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
//Route::get('index', function () {
// $contacts = contact::all();

//return view('contact-list', compact('contacts'));
//});
Route::get('/', [contactcontroller::class, 'index']);
//Route::get ('/contact',function(){
// return view('contact');
//});
Route::get('/contact', [contactcontroller::class, 'contact']);
Route::post('/stor', [contactcontroller::class, 'store']);
Route::put('/edit/{id}',[contactcontroller::class,'edit']);
Route::putch('update/{id}',[contactcontroller::class,'update']);
Route::delete('destroy/{id}',[contactcontroller::class,'destroy']);
