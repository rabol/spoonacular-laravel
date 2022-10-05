<?php

namespace Rabol\SpoonacularLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Rabol\SpoonacularLaravel\Commands\SpoonacularLaravelCommand;

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
