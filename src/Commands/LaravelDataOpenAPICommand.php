<?php

namespace Overbeck\LaravelDataOpenAPI\Commands;

use Illuminate\Console\Command;

class LaravelDataOpenAPICommand extends Command
{
    public $signature = 'laravel-data-openapi';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
