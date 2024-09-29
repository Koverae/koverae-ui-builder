<?php

namespace Koverae\KoveraeUiBuilder\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
use Koverae\KoveraeUiBuilder\Traits\ComponentParser;

class MakeFormCommand extends Command
{
    use ComponentParser;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'koverae:make-form {component}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new form component for Koverae UI Builder.';

    /**
     * Filesystem instance to handle file generation.
     *
     * @var Filesystem
     */
    protected $files;

    /**
     * Create a new command instance.
     *
     * @param Filesystem $files
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $component = Str::studly($this->argument('component'));
        $path = $this->getPath($component);

        if ($this->files->exists($path)) {
            $this->error("Component [{$component}] already exists!");
            return 0;
        }

        $this->makeDirectory($path);
        $this->files->put($path, $this->getStubContent($component));

        // Display the class, view, and tag
        $this->displayComponentInfo($component);

        return 0;
    }

    /**
     * Get the destination path where the component should be created.
     *
     * @param string $component
     * @return string
     */
    protected function getPath(string $component): string
    {
        return app_path("Livewire/Form/{$component}.php");
    }

    /**
     * Create the directory for the component if it doesn't exist.
     *
     * @param string $path
     * @return void
     */
    protected function makeDirectory(string $path): void
    {
        if (!$this->files->isDirectory(dirname($path))) {
            $this->files->makeDirectory(dirname($path), 0755, true);
        }
    }

    /**
     * Get the stub content for the new component class.
     *
     * @param string $component
     * @return string
     */
    protected function getStubContent(string $component): string
    {
        return str_replace(
            ['{{component}}', '{{componentClass}}'],
            [$component, Str::studly($component)],
            $this->files->get($this->getStubPath())
        );
    }

    /**
     * Get the path to the stub file.
     *
     * @return string
     */
    protected function getStubPath(): string
    {
        return __DIR__ . '/stubs/form.stub';
    }

    /**
     * Display the class, view, and tag.
     *
     * @param string $className
     */
    protected function displayComponentInfo($className)
    {
        $slug = strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $className));

        $classPath = "App\\Http\\Livewire\\Form\\{$className}";
        // $viewPath = "resources/views/livewire/form/{$slug}.blade.php";
        $tag = "<livewire:form::{$slug} />";

        $this->line("CLASS: {$classPath}");
        // $this->line("VIEW: {$viewPath}");
        $this->line("TAG: {$tag}");
    }

}