@props([
    'value',
    'data'
])

<div class="mt-2 ps-3">
    <!-- Input Form -->
    <textarea wire:model="{{ $value->model }}" class="border textearea" placeholder="{{ $value->placeholder }}" id="description" {{ $this->blocked ? 'disabled' : '' }}>
        {!! $value->model !!}
    </textarea>
    @error($value->model) <span class="text-danger">{{ $message }}</span> @enderror
</div>
