<?php

use App\Livewire\ContactPage;
use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/contact', ContactPage::class);
