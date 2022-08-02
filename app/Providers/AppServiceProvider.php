<?php

namespace App\Providers;

use App\Models\Contacts;
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
        $services = Services::take(7)->get();
        View::share(['contacts' => $contacts, 'services_share' => $services]);
    }
}
