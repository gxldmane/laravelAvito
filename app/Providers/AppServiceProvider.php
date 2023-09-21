<?php

namespace App\Providers;

use App\Models\Ad;
use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
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
    public function boot(Dispatcher $events): void
    {


        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('MAIN NAVIGATION');
            $event->menu->add(
                [
                    'text' => 'Users',
                    'url' => 'admin/users',
                    'icon' => 'users',
                    'label' => User::count(),
                    'label_color' => 'success',
                ],
                [
                    'text'        => 'Categories',
                    'url'         => 'admin/categories',
                    'icon'        => 'users',
                    'label'       => Category::count(),
                    'label_color' => 'success',
                ],
                [
                    'text'        => 'Ads',
                    'url'         => 'admin/ads',
                    'icon'        => 'users',
                    'label'       => Ad::count(),
                    'label_color' => 'success',
                ],
                [
                    'text'        => 'Cities',
                    'url'         => 'admin/cities',
                    'icon'        => 'users',
                    'label'       => City::count(),
                    'label_color' => 'success',
                ],
            );
        });

    }
}
