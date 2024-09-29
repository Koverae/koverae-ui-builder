<?php

namespace Koverae\KoveraeUiBuilder\Form;

class Tabs{

    public string $component = 'koverae-ui-builder::components.form.tab.simple';

    public string $key;

    public string $label;

    public $condition;
    public bool $active = false;

    public function __construct($key, $label, $condition = null, $active = null)
    {
        $this->key = $key;
        $this->label = $label;
        $this->condition = $condition;
    }

    public static function make($key, $label, $condition = null, $active = null)
    {
        return new static($key, $label, $condition);
    }


    public function component($component)
    {
        $this->component = $component;

        return $this;
    }
}
