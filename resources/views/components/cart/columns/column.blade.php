@props([
    'value',
    'index',
    'input',
])

@if($this->editingIndex === $index)
<div>
    <input type="text"
        wire:keydown.enter="save({{ $index }})"
        wire:blur="save({{ $index }})"
        wire:model="{{ $value->model }}"
        data-focus="true" class="k_input">
</div>
@else
    <div class="w-100" wire:click.prevent="toggleEditing({{ $index }})">
        <span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    </div>
@endif
