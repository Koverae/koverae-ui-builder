@props([
    'value',
    'data'
])

    <!-- summary -->
    <div class="tab-pane" id="{{ $value->key }}" wire:ignore>
        <div class="row align-items-start">

            <!-- Left Side -->
            <div class="k_inner_group col-lg-12">
                <!-- Description -->
                @foreach($this->inputs() as $input)
                    @if($input->tab == $value->key)
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
