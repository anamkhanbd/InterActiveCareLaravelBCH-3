<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::Class, 'home'])->name('index');


Route::get('/contact', [PagesController::Class, 'contact'])->name('contact');
Route::get('/Design', [PagesController::Class, 'design'])->name('design'); 
Route::get('/Development', [PagesController::Class, 'development'])->name('development');
Route::get('/Application', [PagesController::Class, 'application'])->name('application');

//registration 
Route::get('/singup', [PagesController::class, 'singup'])->name('singup');
Route::get('/login', [PagesController::class, 'login'])->name('login');

//POST MEthod
Route::post('/singup', [PagesController::class, 'dataSingUp'])->name('singup.post');
