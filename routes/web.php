<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;



Route::get("/",[HomeController::class,"index"] );



Route::get("/users",[AdminController::class,"user"] );

Route::get("/deletemenu/{id}",[AdminController::class,"deletemenu"] );


Route::get("/foodmenu",[AdminController::class,"foodmenu"] );

Route::post("/uploadfood",[AdminController::class,"upload"] );

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"] );

Route::get("/updateview/{id}",[AdminController::class,"updateview"] );

Route::post("/update/{id}",[AdminController::class,"update"] );


Route::get("/redirects",[HomeController::class,"redirects"] );

Route::post("/reservation",[AdminController::class,"reservation"] );

Route::get("/viewreservation",[AdminController::class,"viewreservation"] );

Route::post("/addcart/{id}",[HomeController::class,"addcart"] );

Route::get("/showcart/{id}",[HomeController::class,"showcart"] );

Route::get("/remove/{id}",[HomeController::class,"remove"] );

Route::post("/orderconfirm",[HomeController::class,"orderconfirm"] );

Route::get("/orders",[AdminController::class,"orders"] );

Route::get("/search",[AdminController::class,"search"] );

Route::middleware([
    'auth:sanctum', 'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
