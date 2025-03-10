<?php

namespace DeezenUI\Deezen\Commands;

use DeezenUI\Deezen\Utils\PathUtil;
use Illuminate\Console\Command;

class AddComponentCommand extends Command
{
    protected $deezenViewPath, $destViewPath;

    protected $signature = 'deezen:add {comp?}';
    protected $description = 'Add a new component';

    public function __construct()
    {
        parent::__construct();

        $deezenPath = str_replace(PathUtil::changeSeparator('/src/Commands'), '', __DIR__);

        $this->deezenViewPath = "$deezenPath/resources/views/";
        $this->destViewPath = PathUtil::resourcePath() . '/views/components/';
    }

    public function handle()
    {
        if (!is_dir($this->destViewPath))
            mkdir($this->destViewPath);

        $component = $this->argument('comp');
        $path = $this->deezenViewPath . "components/{$component}.blade.php";

        $this->place(PathUtil::changeSeparator($path));
        $this->info('Component added successfully!');
    }

    private function place(string $component): void
    {
        $destPath = PathUtil::changeSeparator($this->destViewPath . basename($component));
        copy($component, $destPath);
    }
}
