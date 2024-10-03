<?php

namespace Koverae\KoveraeUiBuilder\Table;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Livewire\WithPagination;

abstract class Table extends Component
{
    use WithPagination;

    public $view = 'lists';

    public $perPage = 50;

    public $page = 1;

    public $sortBy = '';

    public $sortDirection = 'asc';

    public $ids = [];
    
    public $component = 'koverae-ui-builder::table.table';


    public function render()
    {
        return view($this->component);
    }

    public function emptyTitle() : string{
        return '';
    }

    public function emptyText() : string{
        return '';
    }

    public function emptyButton() : string{
        return '';
    }

    public function createRoute() : string{
        return '';
    }

    public abstract function query() : Builder;

    public abstract function columns() : array;

    public function showRoute($id) : string{
        return '';
    }

    public function data()
    {
        return $this
            ->query()->isCompany(current_company()->id)
            ->when($this->sortBy !== '', function ($query) {
                $query->orderBy($this->sortBy, $this->sortDirection);
            })
            ->paginate($this->perPage);
    }

    public function sort($key) {
        $this->resetPage();

        if ($this->sortBy === $key) {
            $direction = $this->sortDirection === 'asc' ? 'desc' : 'asc';
            $this->sortDirection = $direction;

            return;
        }

        $this->sortBy = $key;
        $this->sortDirection = 'asc';
    }

      public function toggleCheckbox($id)
      {
          // If the checkbox is checked, add the id to the array
          if (in_array($id, $this->ids)) {
              $this->ids = array_diff($this->ids, [$id]);
          } else {
              $this->ids[] = $id;
          }
        // Toggle the presence of the ID in the array
        // if (in_array($id, $this->ids)) {
        //     $this->ids = array_values(array_diff($this->ids, [$id])); // Remove the ID if it's already present
        // } else {
        //     $this->ids[] = $id; // Add the ID if it's not present
        // }
      }

      public function emptyArray()
      {
          // Empty the $ids array
          $this->ids = [];
      }


}
