<?php

use App\Http\Controllers\Admin_Controller;
use App\Http\Controllers\User_Controller;
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

Route::any('/index',[User_Controller::class,'index'])->name('index');
Route::any('/contact',[User_Controller::class,'contact'])->name('contact');
Route::any('/item',[User_Controller::class,'item'])->name('item');
Route::any('/ditails/{id}',[User_Controller::class,'ditails'])->name('ditails');
Route::any('/feedback',[User_Controller::class,'feedback'])->name('feedback');
Route::any('/signup',[User_Controller::class,'signup'])->name('signup');
Route::any('/signin',[User_Controller::class,'signin'])->name('signin');
Route::any('/readmore',[User_Controller::class,'readmore'])->name('readmore');
Route::any('/logout',[User_Controller::class,'logout'])->name("logout");
Route::any('/chake',[User_Controller::class,'chake'])->name("chake");



// admin 

Route::any('/food',[Admin_Controller::class,'food'])->name('food');
Route::any('/index2',[Admin_Controller::class,'index2'])->name('index2');
Route::any('/user',[Admin_Controller::class,'user'])->name('user');
Route::any('/order',[Admin_Controller::class,'order'])->name('order');
Route::any('/feedback2',[Admin_Controller::class,'feedback2'])->name('feedback2');
Route::any('/delete/{id}',[Admin_Controller::class,'delete'])->name('delete');
Route::any('/update/{id}',[Admin_Controller::class,'update'])->name('update');
Route::any('/edit',[Admin_Controller::class,'edit'])->name('edit');

