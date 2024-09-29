<?php

namespace Koverae\KoveraeUiBuilder\Form;

class Group{

    public string $component = 'koverae-ui-builder::components.form.tab.group.simple';

    public string $key;

    public string $label;

    public $tab;

    public function __construct($key, $label, $tab = null)
    {
        $this->key = $key;
        $this->label = $label;
        $this->tab = $tab;
    }

    public static function make($key, $label, $tab = null)
    {
        return new static($key, $label, $tab);
    }


    public function component($component)
    {
        $this->component = $component;

        return $this;
    }
}
