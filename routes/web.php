<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/dashboard', function () {
    $user = Auth::user();
    return view('dashboard')->with('user', $user);
})->middleware(['auth'])->name('dashboard');

Route::get('/post/{post}', [PostController::class, 'read'])->name('post');    

Route::get('/newPost', [PostController::class, 'insertView']);
Route::post('/newPost', [PostController::class, 'create']);

require __DIR__.'/auth.php';
