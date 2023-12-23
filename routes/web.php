<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about/{id}/{name?}', function (int $id,  string $name= null){
//     return view('about')->with(['id' => $id, 'name' => $name ]);
// });

Route::get('/', [StudentController::class, 'index']);
Route::get('/about', [StudentController::class, 'about']);
Route::get('/register', [StudentController::class, 'register']);
Route::post('/register', [StudentController::class, 'create']);




