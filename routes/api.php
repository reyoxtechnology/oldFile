<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Agent\AgentController;

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

Route::middleware('auth:sanctum')->group(function () {

    //users endpoint
    Route::get('/user',           [LoginController::class,'authenticatedUser']);
    Route::get('/logout',         [LoginController::class,'logout']);
    Route::get('/onlineAgent',    [UserController::class,'listOfOnlineAgent']);
    
    //agent endpoint
    Route::get('/user',            [LoginController::class,'authenticatedUser']);
    Route::get('/logout',          [LoginController::class,'logout']);


    // end point dashbord
    Route::get('/users',           [UserController::class,'getAlluser']); 
    Route::get('/agent',           [AgentController::class,'getAllAgent']);
    Route::get('/admin',           [AgentController::class,'getAllAgent']);
});




//login api configuration
Route::post('/login',      [LoginController::class,'login']);

//this api handles users registration 
Route::post('/user_registration',[RegisterController::class,'registerUser']);
// this handles agent api 
Route::post('/agent_registration',[RegisterController::class,'registerAgent']);
//this handles admin Dashbaord registration  on the web 
Route::post('/admin_registration',[RegisterController::class,'registerAdmin']);