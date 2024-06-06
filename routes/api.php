<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HR\StaffController;
use App\Http\Controllers\HR\PostController;
use App\Http\Controllers\User\ApplicationController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->middleware('api')->group(function () {
    Route::get('/hr/staff', [StaffController::class, 'AllStaff']);
    Route::get('/hr/staff/{id}', [StaffController::class, 'SingleStaff']);
});

Route::prefix('v1')->middleware('api')->group(function () {
    Route::get('/applicants', [ApplicationController::class, 'Allapplicants']);
    Route::get('/applicant/{id}', [ApplicationController::class, 'SingleApplicant']);

    Route::get('/posts', [PostController::class, 'Allposts']);
    Route::get('/post/{id}', [PostController::class, 'SinglePost']);



});

