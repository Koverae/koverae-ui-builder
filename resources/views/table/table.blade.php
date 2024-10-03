<div>
    <!-- Table -->
    <div class="mb-2 table-responsive">
        <table class="table card-table table-vcenter text-nowrap datatable">
            <thead class="list-table">
            <tr class="list-tr">
                <th class="w-1"><input class="m-0 align-middle form-check-input" type="checkbox" aria-label="Select all invoices"></th>
                @foreach($this->columns() as $column)
                    <th wire:click="sort('{{ $column->key }}')" class="cursor-pointer">
                        {{ $column->label }}
                        <!-- Sort By -->
                        @if($sortBy === $column->key)
                          @if ($sortDirection === 'asc')
                            <i class="bi bi-arrow-up-short"></i>
                          @else
                          <i class="bi bi-arrow-down-short"></i>
                          @endif
                        @endif
                    </th>
                @endforeach
            </tr>
            </thead>
            <tbody class="bg-white ">
                @foreach($this->data() as $row)
                <tr class="cursor-pointer">
                    <td>
                        <input class="m-0 align-middle form-check-input" type="checkbox" wire:model.defer="ids.{{ $row->id }}" wire:click="toggleCheckbox({{ $row->id }})" wire:loading.attr="disabled" defer>
                    </td>
                    @foreach($this->columns() as $column)
                    <td>
                        <x-dynamic-component
                            :component="$column->component"
                            :value="$row[$column->key]"
                            :id="$row->id"
                        >
                        </x-dynamic-component>
                    </td>
                    @endforeach
                    <div class="centered-section ">

                    </div>
                    {{-- <td class="text-end">
                        <span class="dropdown">
                        <button class="align-text-top btn dropdown-toggle" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">
                            {{ __('Exporter') }}
                            </a>
                            <a href="#" wire:click="delete({{ $row->id }})" wire:confirm="Êtes-vous sûr de vouloir supprimer cet enregistrement ?" class="dropdown-item text-danger">
                                {{ __('Supprimer') }}
                            </a>
                        </div>
                        </span>
                    </td> --}}
                </tr>
                @endforeach

            </tbody>
        </table>
        <div class="card-footer d-flex align-items-end ms-auto w-100">
            {{ $this->data()->links() }}
        </div>
    </div>
    @if($this->data()->count() == 0)
    <div class="bg-white empty k_nocontent_help">
        <img src="{{ asset('assets/images/illustrations/errors/missing-element.svg') }}"style="height: 350px" alt="">
        <p class="empty-title">{{ $this->emptyTitle() }}</p>
        <p class="empty-subtitle">{{ $this->emptyText() }}</p>
    </div>
    @endif

</div>
