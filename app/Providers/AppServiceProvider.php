<?php

namespace App\Providers;

use App\Models\Post;
use App\Observers\PostObserver;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Post::observe(PostObserver::class);

        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['ar','en'])
                ->flags([
                    'ar' => asset('images/ar.png'),
                    'en' => asset('images/en.png'),
                ]); // also accepts a closure
        });

    }
}
