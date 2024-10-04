<?php

use App\Models\Main;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'mains' => Main::with(['one', 'manies'])->get(),
    ]);
});