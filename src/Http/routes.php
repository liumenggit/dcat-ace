<?php

use Liumenggit\Ace\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('ace', Controllers\AceController::class.'@index');