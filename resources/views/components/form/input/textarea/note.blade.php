@props([
    'value',
    'data'
])

<div class="d-flex" style="margin-bottom: 8px;">
    <!-- Input Form -->
    <textarea wire:model="{{ $value->model }}" class="k_input textearea w-100" placeholder="{{ $value->placeholder }}" id="description" {{ $this->blocked ? 'disabled' : '' }}>
        {!! $value->model !!}
    </textarea>
    @error($value->model) <span class="text-danger">{{ $message }}</span> @enderror
</div>
