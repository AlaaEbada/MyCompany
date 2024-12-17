<?php

use App\Livewire\AboutPage;
use App\Livewire\BlogPage;
use App\Livewire\ContactPage;
use App\Livewire\HomePage;
use App\Livewire\PortfolioPage;
use App\Livewire\ServicesPage;
use App\Livewire\SinglePost;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/about-us', AboutPage::class);
Route::get('/portfolio', PortfolioPage::class);
Route::get('/services', ServicesPage::class);
Route::get('/contact', ContactPage::class);
Route::get('/blog', BlogPage::class)->name('blog');
Route::get('/post/{slug}', SinglePost::class)->name('post.show');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

