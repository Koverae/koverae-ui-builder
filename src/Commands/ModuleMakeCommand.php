<?php

namespace Koverae\KoveraeUiBuilder\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Koverae\KoveraeUiBuilder\Traits\ComponentParser;

class ModuleMakeCommand extends Command
{
    use ComponentParser;

    protected $signature = 'koverae:module-component {component} {module} {--view=} {--type=} {--inline} {--form} {--force} {--stub=} {--custom}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Koverae Component inside your Module.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (! $this->parser()) {
            return false;
        }

        if (! $this->checkClassNameValid()) {
            return false;
        }

        if (! $this->checkReservedClassName()) {
            return false;
        }
        
        // Get the type of component
        $type = $this->option('type');
        
        if($type == null){
            $this->error('<options=bold,reverse;fg=red> Missing option --type="type-needed" is required </> 😳');
            return false;
        }

        // Ensure a valid component type is passed (optional validation)['table', 'form', 'navbar', 'cart', 'modal', 'map']
        $validTypes = ['table', 'form', 'cart', 'panel'];
        if ($type && !in_array($type, $validTypes)) {
            $this->error("Invalid component type '{$type}'. Valid types are: " . implode(', ', $validTypes));
            return false;
        }

        $class = $this->createClass();

        if ($class) {
            $this->line("<options=bold,reverse;fg=green> COMPONENT CREATED </> 🤙🏿\n");

            $class && $this->line("<options=bold;fg=green>CLASS:</> {$this->getClassSourcePath()}");

            $class && $this->line("<options=bold;fg=green>TAG:</> {$class->tag}");
        }

        return false;
    }
    

    protected function createClass()
    {
        $classFile = $this->component->class->file;

        if (File::exists($classFile) && ! $this->isForce()) {
            $this->line("<options=bold,reverse;fg=red> WHOOPS-IE-TOOTLES </> 😳 \n");
            $this->line("<fg=red;options=bold>Class already exists:</> {$this->getClassSourcePath()}");

            return false;
        }

        $this->ensureDirectoryExists($classFile);

        File::put($classFile, $this->getClassContents());

        return $this->component->class;
    }

}