<?php

use Illuminate\Support\Facades\Route;

Route ::get('/', function () {
    return "admin page";
})->name('dashboard');
