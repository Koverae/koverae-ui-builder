@props([
    'value',
    'data'
])
    <!-- Left Side -->
    <div class="k_inner_group col-md-6 col-lg-6">
        @foreach($this->inputs() as $input)
            @if($input->group == $value->key && $input->position == 'left')
                <x-dynamic-component
                    :component="$input->component"
                    :value="$input"
                >
                </x-dynamic-component>
            @endif
        @endforeach
    </div>

    <!-- Right Side -->
    <div class="k_inner_group col-md-6 col-lg-6">
        @foreach($this->inputs() as $input)
            @if($input->group == $value->key && $input->position == 'right')
                <x-dynamic-component
                    :component="$input->component"
                    :value="$input"
                >
                </x-dynamic-component>
            @endif
        @endforeach
    </div>


