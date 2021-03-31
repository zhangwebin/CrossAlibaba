<?php

namespace CrossAlibaba;

use Illuminate\Support\ServiceProvider;

class CrossAlibabaProvider extends ServiceProvider
{
    public function boot()
    {
        //发布文件
        $this->publishes([
            __DIR__ . '/config/cross_alibaba.php' => config_path('cross_alibaba.php')
        ]);

    }

    public function register()
    {
        $this->app->singleton('CrossAlibaba', function ($app) {
            return new CrossAlibaba();
        });
    }
}
