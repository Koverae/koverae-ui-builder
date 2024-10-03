<form wire:submit.prevent="updateQuantity('{{ $cart_item->rowId }}', '{{ $cart_item->id }}')" wire:ignore>
    @csrf
    {{-- <button class="btn cart_qty_btn" type="button" wire:click="updateQuantity('{{ $cart_item->rowId }}', '{{ $cart_item->id }}')" wire:target="updateQuantity('{{ $cart_item->rowId }}', '{{ $cart_item->id }}')">
        <i class="bi bi-check"></i>
    </button> --}}
    <input type="number" wire:model.defer="quantity.{{ $cart_item->id }}" class="k_input" value="{{ $cart_item->qty }}" min="1" />
</form>
