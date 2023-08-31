<?php

namespace Sashagm\Messages\Providers;

use Illuminate\Support\ServiceProvider;
use Sashagm\Messages\Console\Commands\InstallCommand;

class MessagesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
       // dd(1);

       $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

       $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

       $this->loadViewsFrom(__DIR__.'/../resources/views', 'messages');

       $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/messages'),
       ]);

       $this->publishes([
        __DIR__.'/../config/ms.php' => config_path('ms.php'),
        ]);


        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        } else {
            $this->commands([
                InstallCommand::class,
            ]);
        }


        $this->app['router']->aliasMiddleware('read_messages', \Sashagm\Messages\Http\Middleware\ReadMessagesMiddleware::class);
        $this->app['router']->aliasMiddleware('send_messages', \Sashagm\Messages\Http\Middleware\SendMessageMiddleware::class);

    }
}
