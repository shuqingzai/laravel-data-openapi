<?php

namespace Overbeck\LaravelDataOpenAPI;

use Overbeck\LaravelDataOpenAPI\Commands\LaravelDataOpenAPICommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDataOpenAPIServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-data-openapi')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-data-openapi_table')
            ->hasCommand(LaravelDataOpenAPICommand::class);
    }
}
