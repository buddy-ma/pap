<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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
        if (App::environment('production')) {
            $this->app->bind('path.public', function () {
                return realpath(base_path() . '/../');
            });
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['admin.layouts.aside-menu'], function ($view) {
            $logo = Auth::user()->logo;
            if (empty($logo)) {
                $view->with('logo', 'assets/images/logo.svg');
            } else {
                $logo = "storage/user/$logo";
                $view->with('logo', $logo);
            }
        });

        view()->composer(['layouts.app'], function ($view) {
            $logo = User::first()->logo;
            $logo_wh = User::first()->logo_wh;
            if (empty($logo) || empty($logo_wh)) {
                $view->with([
                    'logo' => 'assets/images/logo.svg',
                    'logo_wh' => 'assets/images/logo_wh.svg',
                ]);
            } else {
                $logo = "storage/user/$logo";
                $logo_wh = "storage/user/$logo_wh";
                $view->with([
                    'logo' => "$logo",
                    'logo_wh' => "$logo_wh",
                ]);
            }
        });
    }
}
