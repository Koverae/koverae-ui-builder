<?php

namespace Koverae\KoveraeUiBuilder\Traits\Form\Button;


trait ActionBarButton{

    // Change dynamicaly the display order depends on status
    public function sortActionButtons($buttons, $customOrder, $status){

        // Sort the buttons based on custom conditions
        usort($buttons, function ($a, $b) use ($customOrder, $status) {

            // If the primary status is the desired status, prioritize it
            if ($a->primary == $status) {
                return -1; // $a comes first
            } elseif ($b->primary == $status) {
                return 1; // $b comes first
            }

            // Otherwise, use the custom order
            return array_search($a->key, $customOrder) - array_search($b->key, $customOrder);
        });

        return $buttons;
    }
}
