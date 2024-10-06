<?php

namespace Koverae\KoveraeUiBuilder\Navbar;

class Breadcrumb{

    public $breadcrumbs = [];

    // Configurable options
    public $separator = '/';
    public $urlPrefix = '';
    public string $key;

    public string $label;
    public string $component = 'koverae-ui-builder::navbar.breadcrumb';

    public function __construct($key, $label)
    {
        $this->key = $key;
        $this->label = $label;
    }

    public static function make($key, $label)
    {
        return new static($key, $label);
    }


    public function component($component)
    {
        $this->component = $component;

        return $this;
    }

    private function generateBreadcrumbs()
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

}
