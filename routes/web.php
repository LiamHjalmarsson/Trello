<?php

use App\Http\Controllers\BoardController;
use Illuminate\Support\Facades\Route;


Route::resource('boards', BoardController::class);
