<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Ville;
use App\Models\Categorie;
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

        view()->composer(['partials.footer'], function ($view) {
            $conseils_cat = Categorie::where('title', 'Conseils')->first();
            $dm_cat = Categorie::where('title', 'DecouvrezLeMaroc')->first();

            $villes = Ville::get()->take(5);
            $all_conseils = $conseils_cat->blogs()->where('status', 1)->where('approved', 1)->take(5)->get();
            $all_dm = $dm_cat->blogs()->where('status', 1)->where('approved', 1)->take(5)->get();

            $view->with([
                'villes' => $villes,
                'all_conseils' => $all_conseils,
                'all_dm' => $all_dm
            ]);
        });
    }
}
