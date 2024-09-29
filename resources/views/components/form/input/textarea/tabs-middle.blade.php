@props([
    'value',
])
<div class="text-break k_cell k_wrap_input ">
    <textarea wire:model="{{ $value->model }}" id="description" cols="30" rows="5" class="k_input textearea" placeholder="{{ $value->placeholder }}" {{ $this->blocked ? 'disabled' : '' }}>
    </textarea>
    @error($value->model) <span class="text-danger">{{ $message }}</span> @enderror
</div>
