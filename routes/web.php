<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\userController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/register', function () {
//     return view('about');
// });

Route::get('/user/register', [userController::class, 'registerPageShowUp'])->name('user.register');