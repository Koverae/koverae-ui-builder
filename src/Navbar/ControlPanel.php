<?php

namespace Koverae\KoveraeUiBuilder\Navbar;

use Illuminate\Support\Arr;
use Livewire\Component;
use Livewire\Attributes\Url;

abstract class ControlPanel extends Component
{
    #[Url(as: 'view_type')]
    public $view = 'lists';

    public $showBreadcrumbs = true, $showCreateButton = true, $showPagination = false, $showIndicators= false;
    public $createButtonLabel = 'Nouveau';

    public $breadcrumbs = [];

    // Configurable options
    public $separator = '/';
    public $urlPrefix = '';

    public $currentPage;
    public $new;
    public $add;
    public $event;
    public $view_type = 'lists';

    public function mount(){
        $this->view_type = $this->view;
    }

    public function render()
    {
        return view('koverae-ui-builder::navbar.control-panel');
    }

    public function switchButtons() : array{
        return [];
    }


    public function generateBreadcrumbs()
    {
        $segments = request()->segments();

        foreach ($segments as $key => $segment) {
            $url = implode('/', array_slice($segments, 0, $key + 1));

            // Prefix the URL if specified
            $url = $this->urlPrefix ? $this->urlPrefix . '/' . $url : $url;

            $this->breadcrumbs[] = [
                'url' => url($url),
                'label' => ucwords(str_replace(['-', '_'], ' ', $segment)),
            ];
        }
    }

    public function saveUpdate(){
        $this->dispatch($this->event);
        // $this->dispatch('saveChange');
    }

    public function resetForm(){
        $this->dispatch('reset-form');
    }

    public  function actionButtons() : array{
        return [];
    }

    public function switchView($view){
        $this->view_type = $view;
        $this->dispatch('switch-view', view: $view);
    }

}