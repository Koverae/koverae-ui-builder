<?php

namespace Koverae\KoveraeUiBuilder\Form;

use Livewire\Component;

abstract class SimpleForm extends Component
{
    public bool $checkboxes = false;
    public bool $blocked = false;


    public function render()
    {
        return view('koverae-ui-builder::form.simple-form');
    }

    public function form(){
        return null;
    }

    public abstract function inputs() : array;

    public function tabs() : array{
        return [];
    }

    public function groups() : array{
        return [];
    }

    public function actionBarButtons() : array{
        return [];
    }

    public function statusBarButtons(){
        return [];
    }

    public function capsules(){
        return [];
    }

    public  function actionButtons() : array{
        return [];
    }

}
