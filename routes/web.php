<!-- These are the route declarations for the'Entity' Resource -->

<?php

use App\Http\Controllers\EntityController;
use Illuminate\Support\Facades\Route;

//Route for displaying the index page
Route::get('/', [EntityController::class, 'index'])->name('entities.index');

//Route for displaying the create form
Route::get('/entities/create', [EntityController::class, 'create'])->name('entities.create');

//Route for storing the created entity
Route::post('/entities', [EntityController::class, 'store'])->name('entities.store');

//Route for displaying the edit form of a specific entity
Route::get('/entities/{entity}/edit', [EntityController::class, 'edit'])->name('entities.edit');

//Route for updating a specific entity
Route::put('/entities/{entity}', [EntityController::class, 'update'])->name('entities.update');

//Route for deleting a specific entity
Route::delete('/entities/{entity}', [EntityController::class, 'destroy'])->name('entities.destroy');
