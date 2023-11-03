<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;
use PhpParser\Node\Stmt\Echo_;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#method GET
Route::get("/animals", [AnimalController::class, 'index']);

#method POST
Route::post("/animals", [AnimalController::class, 'store']);

#method PUT
Route::put('/animals/{id}', [AnimalController::class, 'update']);

#method DELETE
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);

#Route Students
Route::get('/students', [StudentController::class, 'index']);
Route::post('/students', [StudentController::class, 'store']);
Route::put('/students/{id}', [StudentController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);