<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ShowController;
use App\Http\Controllers\LoginController;

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


Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);


Route::controller(UserController::class)->group(function(){
    Route::prefix('/practice')->group(function(){
        Route::get('/','show');
        Route::get('/add','add');
        Route::get('/edit','edit');
        Route::get('/update','update');
        Route::get('/delete','delete');
    });
});



Route::controller(ShowController::class)->group(function(){
    Route::get('/banks','showBank')->name('showBank');
    Route::get('/students','showStudent')->name('showStudent');
    Route::get('/subjects','showSubject')->name('showSubject');
});





Route::controller(UserController::class)->group(function(){
    Route::prefix('/practice')->group(function(){
        Route::get('/','show');
        Route::get('/add','add');
        Route::get('/edit','edit');
        Route::get('/update','update');
        Route::get('/delete','delete');
    });
});








// // Student Routes
// Route::controller(StudentController::class)->group(function(){
//     Route::prefix('/students')->group(function(){
//         Route::get('/','show')->name('showStudent');
//         Route::get('/show','showData');
//         Route::post('/','add');
//         Route::get('/edit','edit');
//         Route::put('/','update');
//         Route::delete('/','delete');
//     });
// });


// //Subject routes
// Route::controller(SubjectController::class)->group(function(){
//     Route::prefix('/subjects')->group(function(){
//         Route::get('/','show')->name('showSubject');
//         Route::get('/show','showData');
//         Route::post('/','add');
//         Route::get('/edit','edit');
//         Route::put('/','update');
//         Route::delete('/','delete');
//     });
// });


// //Bank routes
// Route::controller(BankController::class)->group(function(){
//     Route::prefix('/banks')->group(function(){
//         Route::get('/','show')->name('showBank');
//         Route::get('/show','showData');
//         Route::post('/','add');
//         Route::get('/edit','edit');
//         // Route::put('/{id}','update');
//         Route::put('/','update');
//         Route::delete('/','delete');
//         Route::get('/search','search');
//     });
// });

