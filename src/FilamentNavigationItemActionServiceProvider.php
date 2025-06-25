<?php

namespace Ht3aa\FilamentNavigationItemAction;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ht3aa\FilamentNavigationItemAction\Commands\FilamentNavigationItemActionCommand;

class FilamentNavigationItemActionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-navigation-item-action')
            ->hasViews();
    }
}
