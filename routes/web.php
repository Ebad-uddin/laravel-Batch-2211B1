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
Route::get('/std/view', [StudentController::class, 'std_view']);
Route::get('/std/dlt/{id}', [StudentController::class, 'Delete'])->name('std.dlt');
Route::get('/std/edit/{id}', [StudentController::class, 'Edit'])->name('std.edit');
Route::post('/std/update/{id}', [StudentController::class, 'update'])->name('std.update');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
