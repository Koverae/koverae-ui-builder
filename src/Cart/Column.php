<?php

namespace Koverae\KoveraeUiBuilder\Cart;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;

class Column
{
    public string $component = 'koverae-ui-builder::components.cart.columns.column';

    public string $key;

    public string $label;

    public $type;

    public $model;

    public $placeholder;



    public function __construct($key, $label, $type = null, $model = null, $placeholder = null)
    {
        $this->key = $key;
        $this->label = $label;
        $this->type = $type;
        $this->model = $model;
        $this->placeholder = $placeholder;
    }

    public static function make($key, $label, $type = null, $model = null, $placeholder = null)
    {
        return new static($key, $label, $type = null, $model = null, $placeholder = null);
    }

    public function component($component)
    {
        $this->component = $component;

        return $this;
    }

}
