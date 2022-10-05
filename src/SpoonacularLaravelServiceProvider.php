<?php

namespace Rabol\SpoonacularLaravel;

use Rabol\SpoonacularLaravel\Commands\SpoonacularLaravelCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SpoonacularLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('spoonacular-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_spoonacular-laravel_table')
            ->hasCommand(SpoonacularLaravelCommand::class);
    }
}
