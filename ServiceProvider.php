<?php
/**
 * Created by PhpStorm.
 * User: wenlei
 * Date: 2020-05-21
 * Time: 17:23
 */

namespace extend;

use Illuminate\Support\ServiceProvider as Provider;

use extend\DemoFacade;

class ServiceProvider extends Provider{

    public function register()
    {

        $this->app->singleton(DemoFacade::class, function () {
            return new DemoFacade();
        });
    }

}