@props([
    'value',
    'data'
])

<div class="table-responsive">
    <table class="table card-table table-vcenter text-nowrap datatable">
        <thead class="order-table">
            <tr class="order-tr">
                @foreach($this->columns() as $column)
                    @if($column->table === $value->key)
                    <th class="cursor-pointer">
                        {{ $column->label }}
                    </th>
                    @endif
                @endforeach
                <th></th>
            </tr>
        </thead>
        <tbody>
            @if($value->data)
            @foreach($value->data as $model)
            <tr class="k_field_list_row">
                @foreach($this->columns() as $column)
                <td class="k_field_list">
                    <x-dynamic-component
                        :component="$column->component"
                        :value="$model[$column->key]"
                        :id="$model->id"
                    >
                    </x-dynamic-component>
                </td>
                @endforeach
            </tr>
            @endforeach
            @endif
            <tr class="k_field_list_row">
                <td class="k_field_list" style="height: 35px;">
                    <span class="cursor-pointer" href="avoid:js">

                    </span>
                </td>
            </tr>
            <tr class="k_field_list_row">
                <td class="k_field_list">
                    <span class="cursor-pointer " href="avoid:js">
                        <i class="bi bi-plus-circle"></i> {{ __('Add a line') }}
                    </span>
                </td>
            </tr>

        </tbody>
    </table>
    {{-- @if($value->data->count() == 0)
    <div class="bg-white empty k_nocontent_help">
        <img src="{{ asset('assets/images/illustrations/errors/missing-element.svg') }}"style="height: 350px" alt="">
        <p class="empty-title">None</p>
        <p class="empty-subtitle"></p>
    </div>
    @endif --}}
</div>
