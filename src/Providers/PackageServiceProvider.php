<?php
declare(strict_types=1);
 
namespace Fang\LaravelPackagePractice\Providers;
 
use Illuminate\Support\ServiceProvider;
use Fang\LaravelPackagePractice\Console\Commands\FirstPackageCommand;
 
final class PackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                commands: [
                    FirstPackageCommand::class,
                ],
            );
        }
    }
}