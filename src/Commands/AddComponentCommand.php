<?php

namespace DeezenUI\Deezen\Commands;

use Illuminate\Console\Command;

class AddComponentCommand extends Command
{
    protected $signature = 'deezen:add {name}';
    protected $description = 'Add a new component';

    public function handle()
    {
        $this->info('Component added successfully!');
    }
}
