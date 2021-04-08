<?php

namespace Cross;

use Illuminate\Support\ServiceProvider;
use Cross\Alibaba;

class AlibabaProvider extends ServiceProvider
{
    public function boot()
    {
        //发布文件
        $this->publishes([
            __DIR__ . '/Config/alibaba.php' => config_path('alibaba.php')
        ]);

    }

    public function register()
    {
        $this->app->singleton('Alibaba', function ($app) {
            return new Alibaba();
        });
    }
}
