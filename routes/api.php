<?php

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
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

Route::apiResource("categories", CategorieController::class);
Route::apiResource("posts", PostController::class);

Route::get('search/{search}', [HomeController::class, "search"]);

Route::middleware("auth:sanctum")->group(function() {
    Route::post("AddComment/{id}",[HomeController::class,"CreateComment"]);
});

Route::controller(AuthController::class)->group(function () {
    Route::middleware("guest")->group(function () {
        Route::post("register", "register");
        Route::post("login", "login");
    });
    Route::middleware('auth:sanctum')->group(function () {
        Route::get("profile", "profile");
        Route::post("logout", "logout");
    });
});
