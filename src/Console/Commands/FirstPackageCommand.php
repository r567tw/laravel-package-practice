<?php
declare(strict_types=1);
 
namespace Fang\LaravelPackagePractice\Console\Commands;
 
use Illuminate\Console\Command;
 
final class FirstPackageCommand extends Command
{
    protected $signature = "practice";
 
    protected $description = "just say helloworld";

    public function handle()
    {
        $this->info("it's practice package");
    }
}