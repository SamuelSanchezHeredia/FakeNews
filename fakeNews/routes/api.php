<?php

use App\Http\Controllers\VideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionImgController;
use App\Http\Controllers\VideoController;

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

// Define a resource route for QuestionImgController
Route::resource('admin/questionimg', QuestionImgController::class);

// Create a custom route to show quiz images
Route::get('quizimg', [QuestionImgController::class, 'showQuiz']);

// Define another resource route for VideoController
Route::resource('admin/videoinfo', VideoController::class);
