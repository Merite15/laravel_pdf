<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('base64', function ($expression) {
            return "<?php echo 'data:image/' . pathinfo($expression, PATHINFO_EXTENSION) . ';base64,' . base64_encode(file_get_contents($expression)); ?>";
        });
    }
}
