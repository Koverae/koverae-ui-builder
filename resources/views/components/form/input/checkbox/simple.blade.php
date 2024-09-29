@props([
    'value'
])

<div class="d-flex" style="margin-bottom: 8px;">
    <!-- Input Label -->
    <div class="k_cell k_wrap_label flex-grow-1 flex-sm-grow-0 text-break text-900">
        @if($value->label)
        <label class="k_form_label">
            {{ $value->label }}
            @if($value->help)
                <sup><i class="bi bi-question-circle-fill" style="color: #0E6163" data-toggle="tooltip" data-placement="top" title="{{ $value->help }}"></i></sup>
            @endif
        </label>
        @endif
    </div>
    <!-- Input Form -->
    <div class="p-0 k_cell k_wrap_input flex-grow-1">
        <div class="d-inline-block">
            <input type="{{ $value->type }}" wire:model.blur="{{ $value->model }}" class="form-check-input koverae-checkbox" id="{{ $value->model }}">
        </div>
        @error($value->model) <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
