<?php

namespace App\Providers;

use App\Appointment;
use App\LawyerInformation;
use App\lawyerType;
use App\Setting;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);

        $setting = Setting::getByKey();
        $lawyersTypes = lawyerType::all();
        $lawyers = LawyerInformation::all();
        $appointments = Appointment::all();
        View::share([
            'lawyers' => $lawyers,
            'lawyersTypes' => $lawyersTypes,
            'setting' => $setting,
            'appointments' => $appointments,
        ]);
    }
}
