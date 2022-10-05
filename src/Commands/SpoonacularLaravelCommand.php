<?php

namespace Rabol\SpoonacularLaravel\Commands;

use Illuminate\Console\Command;

class SpoonacularLaravelCommand extends Command
{
    public $signature = 'spoonacular-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
