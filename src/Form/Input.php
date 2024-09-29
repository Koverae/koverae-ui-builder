<?php

namespace Koverae\KoveraeUiBuilder\Form;

class Input{

    public string $component = 'koverae-ui-builder::form.input.simple';
    public string $key;

    public $label;

    public string $type;

    public string $model;

    public string $position;

    public string $tab;

    public string $group;

    public $placeholder;

    public $help;
    public array $data = [];

    public function __construct($key, $label, $type, $model, $position, $tab, $group, $placeholder = null, $help = null, $data = [])
    {
        $this->key = $key;
        $this->label = $label;
        $this->type = $type;
        $this->model = $model;
        $this->position = $position;
        $this->tab = $tab;
        $this->group = $group;
        $this->placeholder = $placeholder;
        $this->help = $help;
        $this->data = $data;
    }

    public static function make($key, $label, $type, $model, $position, $tab, $group, $placeholder = null, $help = null, $data = [])
    {
        return new static($key, $label, $type, $model, $position, $tab, $group, $placeholder, $help, $data);
    }


    public function component($component)
    {
        $this->component = $component;

        return $this;
    }
}
