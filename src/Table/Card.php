<?php

namespace Koverae\KoveraeUiBuilder\Table;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;

class Card
{
    public string $component = 'koverae-ui-builder::table.card.simple';

    public string $key;

    public string $title;

    public $model;

    public array $data = [];

    public function __construct($key, $title, $model = null, $data = [])
    {
        $this->key = $key;
        $this->title = $title;
        $this->model = $model;
        $this->data = $data;
    }

    public static function make($key, $title, $model = null, $data = [])
    {
        return new static($key, $title, $model, $data);
    }

    public function component($component)
    {
        $this->component = $component;

        return $this;
    }

}
