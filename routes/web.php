<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/layout', function () {
    return view('layouts.layout');
});


Route::get('/practice', [UserController::class, 'show']);
Route::get('/practice', [UserController::class, 'add']);
Route::get('/practice', [UserController::class, 'edit']);
Route::get('/practice', [UserController::class, 'delete']);


Route::controller(UserController::class)->group(function(){
    Route::prefix('/practice')->group(function(){
        Route::get('/','show');
        Route::get('/add','add');
        Route::get('/edit','edit');
        Route::get('/update','update');
        Route::get('/delete','delete');
    });
});

