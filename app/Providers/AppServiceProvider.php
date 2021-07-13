<?php

namespace App\Providers;

use App\Repository\CategoryRepository;
use App\Repository\ICategoryRepository;
use App\Repository\IProductRepository;
use App\Repository\ProductRepository;
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
        $this->app->bind(ICategoryRepository::class,CategoryRepository::class);
        $this->app->bind(IProductRepository::class,ProductRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
