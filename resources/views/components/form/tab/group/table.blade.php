@props([
    'value',
    'data'
])
    <!-- Left Side -->
    <div class="k_inner_group col-md-6 col-lg-6">
        <!-- separator -->
        <div class="g-col-sm-2">
            <div class="mt-4 mb-3 k_horizontal_separator text-uppercase fw-bolder small">
                    {{ $value->label }}
            </div>
        </div>
        @foreach($this->tables() as $table)
            @if($table->group == $value->key)
                <x-dynamic-component
                    :component="$table->component"
                    :value="$table"
                >
                </x-dynamic-component>
            @endif
        @endforeach
    </div>


