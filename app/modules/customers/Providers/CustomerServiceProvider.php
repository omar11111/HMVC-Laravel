<?php

namespace Customers\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
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
    //   the separators between the directory differentiate form OS to other OS
    $ds = DIRECTORY_SEPARATOR;
    $modelName = "customers";

    //   $prefix = File::getRequire(__DIR__.$ds."..".$ds."config".$ds."routes.php");
    config([$modelName =>File::getRequire(__DIR__.$ds."..".$ds."config".$ds."routes.php")]);

    $this->loadRoutesFrom(__DIR__.$ds."..".$ds."routes".$ds."web.php");
    $this->loadViewsFrom(__DIR__.$ds."..".$ds."resources".$ds."views",$modelName);
    $this->loadTranslationsFrom(__DIR__.$ds."..".$ds."resources".$ds."lang",$modelName);
    $this->loadMigrationsFrom(__DIR__.$ds."..".$ds."database".$ds."migrations");






    }
}
