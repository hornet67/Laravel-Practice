<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\SubjectController;

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




// Student Routes
Route::controller(StudentController::class)->group(function(){
    Route::prefix('/students')->group(function(){
        Route::get('/','show');
        Route::post('/add','add')->name('addStudent');
        Route::get('/edit','edit');
        Route::post('/update','update')->name('updateStudent');
        Route::get('/delete','delete');
    });
});


//Subject routes
Route::controller(SubjectController::class)->group(function(){
    Route::prefix('/subjects')->group(function(){
        Route::get('/','show');
        Route::post('/','add');
        Route::get('/edit','edit');
        Route::put('/','update');
        Route::delete('/','delete');
    });
});

