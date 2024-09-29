<?php

namespace Koverae\KoveraeUiBuilder\Form;

class Capsule{

    public string $component = 'koverae-ui-builder::components.form.capsule.simple';

    public string $key;

    public string $label;

    public string $help;

    public $type;

    public $icon;
    public $action;
    public $data = [];

    public function __construct($key, $label, $help, $type = null, $icon = null, $action = null, $data = [])
    {
        $this->key = $key;
        $this->label = $label;
        $this->help = $help;
        $this->type = $type;
        $this->icon = $icon;
        $this->action = $action;
        $this->data = $data;
    }

    public static function make($key, $label, $help, $type = null, $icon = null, $action = null, $data = [])
    {
        return new static($key, $label, $help, $type, $icon, $action, $data);
    }

    public function component($component)
    {
        $this->component = $component;

        return $this;
    }
}
