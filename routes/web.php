<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// post
// Route::get('/post/create',[PostController::class,'create'])->name('post.create')->middleware('auth');
// Route::post('/post',[PostController::class,'store'])->name('post.store');
// Route::get('/post',[PostController::class,'index'])->name('post.index');
// Route::get('/post/{id}',[PostController::class,'show']);
// Route::get('/post/{post}',[PostController::class,'show'])->name('post.show');
// Route::delete('/post/{post}',[PostController::class,'destroy'])->name('post.delete');
// Route::get('/post/{post}/edit',[PostController::class,'edit'])->name('post.edit');
// Route::patch('/post/{post}',[PostController::class,'update'])->name('post.update');

// Route::resource('/post',PostController::class);
Route::group(['middleware' => 'auth'],function(){
    Route::resource('/post',PostController::class)->except('index','show');
});
Route::resource('/post',PostController::class)->only('index','show');

Route::resource('/category',CategoryController::class);

require __DIR__.'/auth.php';
