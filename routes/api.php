<?php

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


// at /api/posts
Route::get("/posts", function(){
    return response()->json([
        "posts" => [
            [
                "title" => "Post one",
                "content" => "bla bla",
            ],
            [
                "title" => "Post two",
                "content" => "hi man",
            ]
        ]
            ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
