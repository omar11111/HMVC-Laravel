<?php

     function DS()
    {
        return  DIRECTORY_SEPARATOR;
    }

    function getModuleName($moduleName){

        return app_path('modules'.DS().$moduleName.DS());

    }

    function loadConfigFile($fileName ,$moduleName){

        return getModuleName($moduleName).'config'.DS().$fileName.'.php';

    }

    function loadRoute($fileName,$moduleName){
        return getModuleName($moduleName).'routes'.DS().$fileName.'.php';
    }

    function loadViews( $moduleName){

        return getModuleName($moduleName).'resources'.DS().'views';

    }

    function loadLang($moduleName){
        return getModuleName($moduleName).'resources'.DS().'lang';
    }


    function loadMigrations($moduleName){

        return getModuleName($moduleName).'database'.DS().'migrations';

    }




?>
