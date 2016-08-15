<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
class BackendServiceProvider extends ServiceProvider {
    public function boot() {}
    public function register() {
        $models = array(
            'User',
            'Team',
            'League',
            'Country',
            'Product',
            'EventSport',
        );
        foreach ($models as $model) {
            $this->app->bind("App\Repositories\Interfaces\\". $model . "Interface", "App\Repositories\Eloquents\\" . $model . "Repository");
        }
    }
}