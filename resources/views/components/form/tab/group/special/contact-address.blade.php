@props([
    'value',
    'data'
])
@if($this->contact)
<div class="p-2 k_kanban_view">
    <div class="mb-2 k_x2m_control_panel d-empty-none">
        <button class="btn btn-secondary" style="background-color: #0E6163;" onclick="Livewire.dispatch('openModal', {component: 'contact::modal.add-contact-modal', arguments: {owner: {{ $this->contact->id }} } } )">
            {{ __('Add Address / Contact') }}
        </button>
    </div>
    <div class="flex-wrap k_kanban_renderer align-items-start d-flex justify-content-start">
        <!-- Address -->
        @foreach($this->addresses as $address)
        <div class="mb-1 k_kanban_card">
            <!-- Content -->
            <div class="k_kanban_card_content">
                <img class="k_kanban_image k_image_62_cover" src="{{ asset('assets/images/apps/default.png') }}">
                <div class="k_kanban_details">
                    <strong class="cursor-pointer k_kanban_record_title" onclick="Livewire.dispatch('openModal', {component: 'contact::modal.add-contact-modal', arguments: {owner: {{ $this->contact->id }}, contact: {{ $address->id }} } } )">
                        <span>{{$address->name}}</span>
                    </strong>
                    @if($address->email)
                    <div class="d-flex align-items-baseline text-break">
                        <i class="mb-1 mr-2 bi bi-envelope koverae-link" style="margin-right: 10px;"></i>
                        <a href="mailto:{{ $address->email }}" class="koverae-link">{{ $address->email }}</a>
                    </div>
                    @endif
                    @if($address->city || $address->country_id || $address->zip)
                    <div class="d-flex align-items-baseline text-break">
                        <i class="mb-1 bi bi-geo koverae-link" style="margin-right: 10px;"></i>
                        <span class="koverae-link">{{ $address->zip }}, {{ $address->city }}, {{ $address->country->common_name }}</span>
                    </div>
                    @endif
                    @if($address->phone)
                    <div class="d-flex align-items-baseline text-break">
                        <i class="bi bi-phone koverae-link" style="margin-right: 10px;"></i>
                        <a class="koverae-link" href="tel:{{ $address->phone }}">{{ $address->phone }}</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
