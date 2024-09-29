@props([
    'value',
    'data'
])
    <!-- Left Side -->
    <div class="k_inner_group col-md-12 col-lg-12">
        <!-- separator -->
        <div class="g-col-sm-2">

            <div class="mt-4 mb-3 k_horizontal_separator text-uppercase fw-bolder small">
                    {{ $value->label }}
            </div>
        </div>

        <div class="row align-items-start">
            <div class="k_inner_group col-md-6 col-lg-6">
                @foreach($this->inputs() as $input)
                    @if($input->group === $value->key && $input->position == 'left')
                        <x-dynamic-component
                            :component="$input->component"
                            :value="$input"
                        >
                        </x-dynamic-component>
                    @endif
                @endforeach
            </div>

            <div class="k_inner_group col-md-6 col-lg-6">
                @foreach($this->inputs() as $input)
                    @if($input->group === $value->key && $input->position == 'right')
                        <x-dynamic-component
                            :component="$input->component"
                            :value="$input"
                        >
                        </x-dynamic-component>
                    @endif
                @endforeach
            </div>
        </div>

    </div>


