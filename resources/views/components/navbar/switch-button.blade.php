@props([
    'value',
    'data'
])
{{-- <button wire:click="{{ $value->action }}" class="k_switch_view btn btn-secondary {{ $value->key == 'lists' ? 'active' : '' }} k_list">
    <i class="bi {{ $value->icon }}"></i>
</button> --}}

<button title="{{ ucfirst($value->key) }} view" class="k_switch_view btn btn-secondary {{ $value->key == $this->view_type ? 'active' : '' }} k_list" wire:click="switchView('{{ $value->key }}')">
    <i class="bi {{ $value->icon }}"></i>
</button>
