<?php

namespace Workbench\App\Providers;

use DeezenUI\Deezen\Utils\PathUtil;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class WorkbenchServiceProvider extends ServiceProvider
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
        PathUtil::setResourcePath(__DIR__ . '/../../resources');
        View::addLocation(__DIR__ . '/../../../resources/views');
    }
}
