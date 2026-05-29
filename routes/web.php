<?php

use App\Http\Controllers\employeecontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    // Employee routes //mag push ka nga reply ka dito kung na access mo na
    Route::get('employee', [employeecontroller::class, 'index'])->name('employee.index');
    Route::get('employee/create', [employeecontroller::class, 'create'])->name('employee.create');
    Route::post('employee', [employeecontroller::class, 'store'])->name('employee.store');
    Route::get('employee/{id}/edit', [employeecontroller::class, 'edit'])->name('employee.edit');
    Route::put('employee/{id}', [employeecontroller::class, 'update'])->name('employee.update');
    Route::delete('employee/{id}', [employeecontroller::class, 'destroy'])->name('employee.destroy');
    // Profile routes
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
});
