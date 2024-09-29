<?php

namespace Koverae\KoveraeUiBuilder\Traits;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Mhmiton\LaravelModulesLivewire\Support\Decomposer;

trait ComponentParser{

    protected $component;

    protected $directories;


    protected function parser()
    {
        // Check if Livewire is installed
        $checkDependencies = Decomposer::checkDependencies(
            $this->isCustomModule() ? ['livewire/livewire'] : null
        );

        if ($checkDependencies->type == 'error') {
            $this->line($checkDependencies->message);

            return false;
        }

        // Parse the component name and directories
        $this->directories = collect(
            preg_split('/[.\/(\\\\)]+/', $this->argument('component'))
        )->map([Str::class, 'studly']);

        $this->component = $this->getComponent(); // Get the final component name

        return $this;
    }

}
