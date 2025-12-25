<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\Home;
use App\Livewire\Posts\ListDraftedPosts;
use Illuminate\Support\Facades\Route;

Route::get("/", Home::class)->name("home");
Route::get("/counter", Counter::class)->name("counter");
Route::get("/posts", CreatePost::class)->name("posts.create");
Route::get("/posts/drafted", ListDraftedPosts::class)->name("posts.drafted");
