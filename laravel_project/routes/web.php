<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToppageController;

Route::resource('toppages', ToppageController::class);
