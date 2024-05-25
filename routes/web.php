<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentsController;

// Route::get('/', function () {
//     return view('welcome');
// });

//Views
//FormPage
Route::get('/', function(){
    return view('pagina1');
});

//StudentsPage
Route::get('/pagina2', function(){
    return view('pagina2');
});


//Controllers and routes
Route::get("/", [FormController::class, "index"])->name("pagina1.index");

Route::post("/addStudent", [FormController::class, "create"])->name("crud.create");

Route::get('/pagina2', [StudentsController::class, "index"])->name('pagina2.index');


