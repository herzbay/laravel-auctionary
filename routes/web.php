<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

require __DIR__.'/auth.php';

Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);

Route::get('dashboards', [HomeController::class,'index'])->name('dashboards');

Route::controller(ItemController::class)->prefix('item')->group(function(){
    Route::get('','index')->name('item');
    Route::get('insert', 'add')->name('item.insert');
    Route::post('insert', 'insert')->name('item.add.insert');
    Route::post('delete/{id}', [ItemController::class, 'delete'])->name('item.delete');
    
});

Route::controller(UserController::class)->prefix('user')->group(function(){
    Route::get('','index')->name('user');
    Route::get('insert', 'add')->name('user.insert');
    Route::post('insert', 'insert')->name('user.add.insert');
    Route::post('delete/{id}', [UserController::class, 'delete'])->name('item.delete.user');
});

Route::get('welcome', function () {
    return view('welcome');
})->name('logoutmin');
