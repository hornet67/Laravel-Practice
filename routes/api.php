<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\BankController;
use App\Http\Controllers\Api\ForgetPasswordController;
use App\Http\Controllers\LoginController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/login', [LoginController::class, 'login'])->middleware('web');


// *************************************** Forget Password Controller Routes Start *************************************** //
Route::controller(ForgetPasswordController::class)->group(function () {
    Route::post('/forgotpassword', 'ForgotPassword');
    Route::post('/resetpassword',  'ResetPassword');
});

Route::middleware(['auth:sanctum'])->group(function () {

    // Student Routes
    Route::controller(StudentController::class)->group(function(){
        Route::prefix('/students')->group(function(){
            Route::get('/','show');
            Route::post('/','add');
            Route::get('/edit','edit');
            Route::put('/','update');
            Route::delete('/','delete');
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


    //Bank routes
    Route::controller(BankController::class)->group(function(){
        Route::prefix('/banks')->group(function(){
            Route::get('/','show');
            Route::post('/','add');
            Route::get('/edit','edit');
            // Route::put('/{id}','update');
            Route::put('/','update');
            Route::delete('/','delete');
            Route::get('/search','search');
        });
    });


});
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
