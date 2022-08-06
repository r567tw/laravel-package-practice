<?php

namespace Fang\LaravelPackagePractice\Tests\Unit;

use \Orchestra\Testbench\TestCase;
use \Fang\LaravelPackagePractice\Providers\PackageServiceProvider;

class FirstPackageCommandTest extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            PackageServiceProvider::class,
        ];
    }
    /** @test */
    function the_command_will_info_message()
    {
        $command = $this->artisan('practice');
        $command->expectsOutput("it's practice package");
    }
}