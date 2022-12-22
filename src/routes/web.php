<?php

use AsadCuet\Inspire\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('inspire', AsadCuet\Inspire\Controllers\InspirationController::class);