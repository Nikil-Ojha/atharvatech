<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // @whatsapp  -> https://wa.me/<number>?text=<default message>
        // @whatsapp('custom message')
        Blade::directive('whatsapp', function ($expression) {
            return "<?php echo e(\\App\\Support\\WhatsApp::url({$expression})); ?>";
        });
    }
}
