@props([
    'value',
    'status'
])

@if($value->data['parent'])
<!-- Invoice -->
<div class="border form-check k_radio_item">
    <i class="k_button_icon bi {{ $value->icon }}"></i>
    @if($value->type == 'link')
    <a style="text-decoration: none;" title="{{ $value->help }}" wire:navigate href="{{ $value->action }}">
        <span class="k_horizontal_span">{{ $value->label }}</span>
        @if($value->data)
        <span class="stat_value d-none d-lg-flex text-muted">
            {{ $value->data['amount'] }}
        </span>
        @endif
    </a>
    @elseif($value->type == 'modal')
    <a style="text-decoration: none;" title="{{ $value->help }}" onclick="Livewire.dispatch('openModal', {!! $value->action !!})">
        <span class="k_horizontal_span">{{ $value->label }}</span>
        @if($value->data)
        <span class="stat_value d-none d-lg-flex text-muted">
            {{ $value->data['amount'] }}
        </span>
        @endif
    </a>
    @endif
</div>
@endif