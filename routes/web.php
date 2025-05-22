<?php

//use App\Models\Recette;
//use Illuminate\Support\Arr;
//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\RecetteController;
//
////Route::get('/', function () {
////    return view('welcome');
////});
//
//Route::view('/', 'welcome');
//Route::view('/projects', 'projects');
//
//Route::get('recettes', function () {
//
//    $model = new Recette();
//    $recettes = $model->getAll();
//
//    return view('recettes.index', compact('recettes'));
//})->name('recettes.index');
//
//Route :: get('/recettes/{id}', function (int $id){
//
//    $model = new Recette();
//    $recette = $model->getById($id);
//
//    return view('recettes.show', compact('recette'));
//})->name('recettes.show');
//
//Route::get('/', [RecetteController::class, 'index']);
//Route::resource('recettes', RecetteController::class);

use App\Http\Controllers\RecetteController;

Route::get('/', fn() => redirect('/recettes'));
Route::resource('recettes', RecetteController::class);
