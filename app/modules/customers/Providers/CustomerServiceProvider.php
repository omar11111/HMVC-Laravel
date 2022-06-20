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

    //   $prefix = File::getRequire(__DIR__.$ds."..".$ds."config".$ds."routes.php");
     config(["customers" =>File::getRequire(__DIR__.$ds."..".$ds."config".$ds."routes.php")]);

      $this->loadRoutesFrom(__DIR__.$ds."..".$ds."routes".$ds."web.php");





    }
}
