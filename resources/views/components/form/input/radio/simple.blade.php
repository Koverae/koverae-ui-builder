@props([
    'value',
    'data'
])

<div class="k_horizontal">
    @foreach($value->data as $option)
    <div class="form-check k_radio_item">
        <input type="{{ $value->type }}" class="form-check-input k_radio_input" name="{{ $value->model }}" wire:model.live="{{ $value->model }}" id="{{ $option['value'] }}" value="{{ $option['value'] }}"/>
        <label class="k_form_label" for="{{ $option['value'] }}">
                {{ $option['label'] }}
        </label>
    </div>
    @endforeach
</div>

