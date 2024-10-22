<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComicController;

Route::resource('comics', ComicController::class);

