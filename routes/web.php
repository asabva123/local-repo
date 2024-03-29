<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserController;

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
    return view('register');
});

//Route::view('login','login');
Route::get('/login', function () {
    if (session()->has('user')) {
        return redirect('profile');
    }
    return view('login');
});
Route::post('user', [UserAuth::class, 'userLogin']);
Route::middleware(['checkAuth'])->group(function () {

    Route::resource('users', UserController::class);
    Route::view('profile', 'profile');

    Route::get('/logout', function () {
        if (session()->has('user')) {
            session()->forget('user');
        }
        return redirect('login');
    });
});

// Route::get('/', function () {
//     return view('register');
// });

// Route::get('/login', function () {
//     if (session()->has('user')) {
//         return redirect('profile');
//     }
//     return view('login');
// });

// Route::post('user/login', [UserController::class, 'login']);

// Route::middleware(['auth'])->group(function () {
//     Route::resource('users', UserController::class); // Exclude create, store, and destroy actions
//     Route::view('profile', 'profile');
//     Route::get('/logout', function () {
//         auth()->logout();
//         return redirect('login');
//     });
// });
