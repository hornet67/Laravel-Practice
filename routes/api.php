<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use app\http\controllers\Api\StudentController;
use app\http\controllers\Api\SubjectController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::middleware(['auth:sanctum'])->group(function () {
//     // Student Routes
//     Route::controller(StudentController::class)->group(function(){
//         Route::prefix('/students')->group(function(){
//             Route::get('/','show');
//             Route::post('/','add');
//             Route::get('/edit','edit');
//             Route::put('/','update');
//             Route::delete('/','delete');
//         });
//     });


//     //Subject routes
//     Route::controller(SubjectController::class)->group(function(){
//         Route::prefix('/subjects')->group(function(){
//             Route::get('/','show');
//             Route::post('/','add');
//             Route::get('/edit','edit');
//             Route::put('/','update');
//             Route::delete('/','delete');
//         });
//     });
// });
// Route::middleware(['auth:sanctum'])->group(function () {
//     Route::controller(UserController::class)->group(function(){
//         Route::prefix('/practice')->group(function(){
//             Route::get('/','show');
//             Route::post('/','add');
//             Route::get('/edit','edit');
//             Route::put('/','update')->middleware(ValidUser::class);
//             Route::delete('/','delete');
//         });
//     });
// });
