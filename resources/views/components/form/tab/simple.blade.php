@props([
    'value',
    'data'
])

    <!-- Tab Content -->

    <!-- Others Informations -->
    <div class="tab-pane {{ $value->key == 'general' || $value->active == 'resume' ? 'active' : '' }}" id="{{ $value->key }}" wire:ignore>
        <div class="row align-items-start">

            @foreach($this->groups() as $group)
                @if($group->tab == $value->key)
                    <x-dynamic-component
                        :component="$group->component"
                        :value="$group"
                    >
                    </x-dynamic-component>
                @endif
            @endforeach


        </div>
    </div>


