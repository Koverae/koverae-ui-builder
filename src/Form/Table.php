<?php

namespace Koverae\KoveraeUiBuilder\Form;

use Illuminate\Database\Eloquent\Builder;
class Table{

    public string $component = 'koverae-ui-builder::components.form.tab.table.simple';

    public string $key;
    public $type;
    public $tab;
    public $group;
    public $data;

    public function __construct($key, $type, $tab = null, $group = null, $data = [])
    {
        $this->key = $key;
        $this->type = $type;
        $this->tab = $tab;
        $this->group = $group;
        $this->data = $data;
    }

    public static function make($key, $type, $tab = null, $group = null, $data = [])
    {
        return new static($key, $type, $tab, $group, $data);
    }


    public function component($component)
    {
        $this->component = $component;

        return $this;
    }

}
