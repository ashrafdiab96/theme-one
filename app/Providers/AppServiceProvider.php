<?php

namespace App\Providers;

use App\Models\Contacts;
use App\Models\Home;
use App\Models\Services;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $contacts = Contacts::first();
        $services = Services::take(4)->get();
        $nav_logo = Home::first()->nav_logo;
        $footer_logo = Home::first()->footer_logo;
        View::share([
            'contacts' => $contacts,
            'services_share' => $services,
            'nav_logo' => $nav_logo,
            'footer_logo' => $footer_logo
        ]);
    }
}
