@props([
    'value',
    'data'
])
    <!-- Left Side -->
    <div class="k_inner_group col-md-12 col-lg-12" id="k_inner_table">
        <!-- separator -->
        {{-- <div class="g-col-sm-2">
            <div class="k_horizontal_separator text-uppercase fw-bolder small" id="k_horizontal_table_separator">
                    {{ $value->label }}
            </div>
        </div> --}}

        @foreach($this->tables() as $table)
            @if($table->group == $value->key)
                <x-dynamic-component
                    :component="$table->component"
                    :value="$table"
                >
                </x-dynamic-component>
            @endif
        @endforeach

        {{-- @foreach($this->inputs() as $input)
            @if($input->group == $value->key)
                <x-dynamic-component
                    :component="$input->component"
                    :value="$input"
                >
                </x-dynamic-component>
            @endif
        @endforeach --}}

    </div>


