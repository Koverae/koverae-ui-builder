@props([
    'value',
    'data'
])
<div class="p-1 pb-3 mb-3" style="border-bottom: 1px solid #D8DADD;">
    <div class="mb-2 k_horizontal">
        @foreach($value->data as $option)
        <div class="form-check k_radio_item">
            <input type="{{ $value->type }}" class="form-check-input k_radio_input" name="{{ $value->model }}" wire:model.live="{{ $value->model }}" id="{{ $option['value'] }}" value="{{ $option['value'] }}"/>
            <label class="k_form_label" for="{{ $option['value'] }}">
                    {{ $option['label'] }}
            </label>
        </div>
        @endforeach
    </div>
    <p class="mb-0">
        <span class="text-muted">
            @if($this->type == 'contact')
                {{ __('Use this to organize company employee contacts (e.g., CEO, CTO).') }}
            @elseif($this->type == 'invoice-address')
                {{ __('Default address for all invoices, automatically selected for company orders.') }}
            @elseif($this->type == 'delivery-address')
                {{ __('Default delivery address, automatically selected for company orders.') }}
            @else
                {{ __(' Other address for the company (e.g. subsidiary, ...).') }}
            @endif
        </span>
    </p>
</div>

