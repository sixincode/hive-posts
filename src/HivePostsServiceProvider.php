<?php

namespace Sixincode\HivePosts;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sixincode\HivePosts\Commands\HivePostsCommand;

class HivePostsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('hive-posts')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_hive-posts_table')
            ->hasCommand(HivePostsCommand::class);
    }
}
