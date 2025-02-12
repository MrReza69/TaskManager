<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


//categories
#region categories routes
Route::get('/categories/create',[CategoryController::class, 'create'])->name('category.create');
Route::post('/categories',[CategoryController::class, 'store'])->name('category.store');
Route::get('/categories', [categoryController::class, 'index'])->name('category.index');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
#endregion

//todos
#region todos routes
Route::get('/', [TodoController::class , 'index'])->name("todo.index");
Route::get('/todos/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todos', [TodoController::class,'store'])->name('todo.store');
Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todo.show');
Route::get('/todos/{todo}/completed', [TodoController::class, 'completed'])->name('todo.completed');
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::put('/todos/{todo}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todo.destroy');

#endregion
