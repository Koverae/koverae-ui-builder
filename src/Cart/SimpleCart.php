<?php

namespace Koverae\KoveraeUiBuilder\Cart;

use Livewire\Component;
use Livewire\Attributes\On;
// use Gloudemans\Shoppingcart\Facades\Cart;

abstract class SimpleCart extends Component
{
    public $inputs = [];
    public $editingIndex = null;

    public $i = 1;
    public $test = 'hi';

    public function render()
    {
        return view('koverae-ui-builder::cart.simple-cart');
    }

    public abstract function columns() : array;

    // Add a new field
    public function add()
    {
        $this->inputs[] = '';
    }

    // Remove a product in cart
    public function remove($index)
    {
        if (isset($this->inputs[$index])) {
            unset($this->inputs[$index]);
        }
        $this->inputs = array_values($this->inputs); // Reset array keys
    }

    public function toggleEditing($index)
    {
        $this->editingIndex = $index === $this->editingIndex ? null : $index;
        $this->test = $index;
    }

    public function save($index)
    {
        // Implement save logic here if needed
        $this->editingIndex = null;
    }
}
