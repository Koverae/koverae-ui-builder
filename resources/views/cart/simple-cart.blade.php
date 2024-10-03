<div>
    <div class="table-responsive" style="margin-top: 10px;">
        <table class="table table-vcenter text-nowrap">
            <thead>
                <tr>
                    @foreach($this->columns() as $column)
                    <th><button class="table-sort">{{ $column->label }}</button></th>
                    @endforeach
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach($inputs as $index => $input)
                <tr class="k_field_list_row">
                    @foreach($this->columns() as $column)
                    <td class="k_field_list">
                        <x-dynamic-component
                            :component="$column->component"
                            :value="$column"
                            :index="$index"
                            :input="$input"
                            :model="$column->model"
                        >
                        </x-dynamic-component>
                    </td>
                    @endforeach
                    <td class="cursor-pointer k_field_list">
                        <span wire:click.prevent="remove({{$index}})">
                            <i class="bi bi-trash"></i>
                        </span>
                    </td>
                </tr>
                @endforeach
                <tr class="k_field_list_row">
                    <td class="k_field_list">
                        <span wire:click.prevent="add()" class="cursor-pointer " style="color: #017E84;" href="avoid:js">
                            <i class="bi bi-plus-circle"></i> Ajouter une ligne
                        </span>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
</div>
