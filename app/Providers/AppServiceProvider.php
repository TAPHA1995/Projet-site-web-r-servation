<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
// pour importer le view
use Illuminate\Support\Facades\View;
use App\Models\contact;

class AppServiceProvider extends ServiceProvider
{
 public function register(): void
 {
    
 }
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        // Pour afficher le nombre de message reçu par notification
        // contact-> contact.blade
        View::composer('header', function ($view) {
            $messageCount = contact::count();
            $view->with('messageCount', $messageCount);
        });
    }
}

// class AppServiceProvider extends ServiceProvider
// {
//     /**
//      * Register any application services.
//      */
//     public function register(): void
//     {
//         //
//     }

//     /**
//      * Bootstrap any application services.
//      */
//     public function boot(): void
//     {
//         Schema::defaultStringLength(191);

//         // Pour afficher le nombre de message reçu par notification
//         // contact-> contact.blade
//         View::composer('header', function ($view) {
//             $messageCount = contact::count();
//             $view->with('messageCount', $messageCount);
//         });
//     }
// }


