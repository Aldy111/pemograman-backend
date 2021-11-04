<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

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

// //method get
// Route::get('/animals', function () {
//     echo "menampilkan data animals";
// });

// //method post
// Route::post('/animals', function () {
//     echo "menampilkan data animals";
// });

// //method put

// Route::put('/animals', function () {
//     echo "menanbah data animals";
// });

// //method delete

// Route::delete('/animals', function () {
//     echo "menghapus data animals";
// });

# method get
Route::get('/animals', [AnimalController::class, 'index']);

# method post
Route::post('/animals', [AnimalController::class, 'store']);

# method put
Route::put('/animals/{id}', [AnimalController::class, 'update']);

# method delete
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);
