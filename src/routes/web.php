<?php

use Morrisrobinson\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use Morrisrobinson\Inspire\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);
