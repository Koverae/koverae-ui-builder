<?php

/*
 * You can place your custom package configuration in here.
 */
return [


    /*
    |--------------------------------------------------------------------------
    | Class Namespace
    |--------------------------------------------------------------------------
    |
    */

    'namespace' => 'Livewire',
    
    /*
    |--------------------------------------------------------------------------
    | Components
    |--------------------------------------------------------------------------
    |
    | Below you reference all components that should be loaded for your app.
    | By default all components from Koverae Kit are loaded in. You can
    | disable or overwrite any component class or alias that you want.
    |
    */

    'components' => [
        'form' => Koverae\KoveraeUiBuilder\Form\SimpleForm::class,
        'table' => Koverae\KoveraeUiBuilder\Table\Table::class,
    ],

];