<?php

namespace App\Providers;

use App\LawyerInformation;
use App\lawyerType;
use App\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $setting = Setting::getByKey();
        $lawyersTypes = lawyerType::all();
        $lawyers = LawyerInformation::all();
        View::share([
            'lawyers' => $lawyers,
            'lawyersTypes' => $lawyersTypes,
            'setting' => $setting,
        ]);
    }
}
