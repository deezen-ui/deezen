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
        $this->destViewPath = PathUtil::resourcePath() . '/views/components';
    }

    public function handle()
    {
        $component = $this->argument('comp');

        $this->place($component);
    }

    private function place(string $component): void
    {
        $component = str_replace('.', '/', $component);
        // Base component path
        $compPath = PathUtil::changeSeparator(
            $this->deezenViewPath . "components/{$component}.blade.php"
        );

        if (!is_file($compPath)) {
            $this->error("Component '{$component}' not found!");
            return;
        }

        // Destination to write
        $destPath = PathUtil::changeSeparator(
            "{$this->destViewPath}/{$component}.blade.php"
        );

        preg_match_all('/<x-(?!slot\b)([\w.-]+)(?=\s|>)/', file_get_contents($compPath), $comps);
        array_map(fn($comp) =>  $this->place($comp), $comps[1]);

        if (!is_dir($this->destViewPath))
            mkdir(directory: dirname($destPath), recursive: true);

        copy($compPath, $destPath);
        $this->info("'{$component}' added successfully ✨");
    }
}
