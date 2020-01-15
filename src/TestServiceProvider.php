<?php
namespace  Sxq\PackageTest;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('test', function () {
            return new Test();
        });
    }
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/test.php' => config_path('test.php'),
        ]);
    }
}
