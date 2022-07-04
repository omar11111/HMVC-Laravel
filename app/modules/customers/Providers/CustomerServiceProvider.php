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

    $modelName = basename(dirname(__DIR__, 1));
// dd($modelName);
    //   $prefix = File::getRequire(__DIR__.$ds."..".$ds."config".$ds."routes.php");
    config([$modelName =>File::getRequire(loadConfigFile('routes',$modelName))
]);

    $this->loadRoutesFrom(loadRoute('web',$modelName));

    $this->loadViewsFrom(loadViews($modelName),$modelName);
    $this->loadTranslationsFrom(loadLang($modelName),$modelName);
    $this->loadMigrationsFrom(loadMigrations($modelName));






    }
}
