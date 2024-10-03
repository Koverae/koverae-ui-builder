<?php

namespace Koverae\KoveraeUiBuilder\Table;

class Column
{
    public string $component = 'koverae-ui-builder::table.column.simple';

    public string $key;

    public string $label;

    public $table;
    public $model;

    public function __construct($key, $label, $table = null, $model = null)
    {
        $this->key = $key;
        $this->label = $label;
        $this->table = $table;
        $this->model = $model;
    }

    public static function make($key, $label, $table = null, $model = null)
    {
        return new static($key, $label, $table, $model);
    }

    public function component($component)
    {
        $this->component = $component;

        return $this;
    }

}
