<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/home', [ProfileController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::middleware('role:user')->group(function () {
        //เข้าได้เฉพาะ user ปกติ
        route::get('/homeUser',[HomeController::class,'userHome'])->name('user.home');

    });
    Route::middleware('role:teacher')->group(function () {
        //เข้าได้เฉพาะ admin
        route::get('/homeTeacher',[HomeController::class,'teacherHome'])->name('teacher.home');
        // route::get('/homeAdmin/adduser',[HomeController::class,'adduser'])->name('admin.adduser');

    });
    Route::middleware('role:TA')->group(function () {
        //เข้าได้เฉพาะ header
        route::get('/homeTA',[HomeController::class,'TAHome'])->name('TA.home');
    });


});


require __DIR__.'/auth.php';
