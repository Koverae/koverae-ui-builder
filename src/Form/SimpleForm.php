<?php

namespace Koverae\KoveraeUiBuilder\Form;

use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Koverae\KoveraeUiBuilder\Traits\Form\Button\ActionBarButton as ActionBarButtonTrait;

abstract class SimpleForm extends Component
{
    use ActionBarButtonTrait, WithFileUploads;

    public bool $checkboxes = false, $blocked = false, $has_avatar = false;


    public function render()
    {
        return view('koverae-ui-builder::form.simple-form');
    }

    public function form(){
        return null;
    }

    public function inputs() : array
    {
        return [];
    }

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
