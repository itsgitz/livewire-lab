<?php

use App\Livewire\Counter;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

// Route::get("/", function () {
//     return view("welcome");
// })->name("home");

Route::get("/", Home::class)->name("home");
Route::get("/counter", Counter::class)->name("counter");
