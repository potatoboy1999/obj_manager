<?php

use App\Http\Controllers\ObjectiveController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::group(["middleware"=>["auth"]], function(){
    Route::group(["prefix"=>"gestor"], function(){
        Route::get("all_items", [ObjectiveController::class,"all_items"])->name("api_all_activities");
    });
//});
