@props([
    'value',
    'data'
])
@if($value->data['parent'])
<div class="d-flex" style="margin-bottom: 8px;" wire:transition.duration.300ms>
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
    <div class="k_cell k_wrap_input flex-grow-1">

        @if($value->type == 'select')
        <select wire:model.blur="{{ $value->model }}" id="{{ $value->model }}" class="k_input">
            <option value=""></option>
            @foreach($value->data as $value => $text)
                <option value="{{ $value }}">{{ $text }}</option>
            @endforeach
        </select>
        @elseif($value->type == 'textarea')
        <textarea wire:model.blur="{{ $value->model }}" class="border textearea k_input" placeholder="{{ $value->placeholder }}" id="description" {{ $this->blocked ? 'disabled' : '' }}>
            {!! $value->model !!}
        </textarea>
        @else
        <input type="{{ $value->type }}" wire:model.blur="{{ $value->model }}" class="p-0 k_input" placeholder="{{ $value->placeholder }}" id="{{ $value->key }}" {{ $this->blocked ? 'disabled' : '' }}>
        @error($value->model) <span class="text-danger">{{ $message }}</span> @enderror
        @endif

    </div>
</div>
@endif

