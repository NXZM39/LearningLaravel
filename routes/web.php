<?php

use Illuminate\Support\Facades\Route;
use App\Models\Comment;


//Route::get('/', function () {
//$comments = Comment::all();
// return view('welcome');
//});

Route::get('/' , App\Http\Livewire\Home::class)->name('home')->middleware('auth');
Route::group(['middleware'=>'guest'], function () {
    Route::get('/login' , App\Http\Livewire\Login::class)->name('login');
    Route::get('/register' , App\Http\Livewire\Register::class);
});
