<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contact;
use App\Service_list;
use App\About;
use App\Filialebi;

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
        view()->composer('*', function ($view){
            
            $providerContact = Contact::firstOrFail();
            $providerAbout = About::firstOrFail();
            $providerBranhces = Filialebi::OrderBy('filialebi_title_eng' , 'ASC')->get();
            $providerServices = Service_list::OrderBy('service_list_title_eng' , 'ASC')->get();

            return $view->with(compact('providerContact' , 'providerServices' , 'providerAbout' , 'providerBranhces'));
                          
        });
    }
}
