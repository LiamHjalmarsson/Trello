<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskListController;
use Illuminate\Support\Facades\Route;


// Route::get('/', BoardController::class);
Route::resource('/', BoardController::class);
// Route::resource('boards.lists', TaskListController::class)->shallow();
// Route::resource('lists.cards', TaskController::class)->shallow();
