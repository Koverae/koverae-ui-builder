@props([
    'value',
])

<div class="d-flex" style="margin-bottom: 8px;">
    <div class="k_cell k_wrap_label flex-grow-1 text-break text-900">
        <label class="k_form_label">
            {{ $value->label }} :
        </label>
    </div>
    <div class="k_address_format">
        <div class="row">
            <div class="col-12" style="margin-bottom: 10px;">
                <input type="text" wire:model.blur="street" id="street" class="p-0 k_input" {{ $this->blocked ? 'disabled' : '' }} placeholder="{{ __('Street 1 ....') }}">
            </div>
            <div class="col-12" style="margin-bottom: 10px;">
                <input type="text" wire:model.blur="street2" id="street2_0" class="p-0 k_input" {{ $this->blocked ? 'disabled' : '' }} placeholder="{{ __('Street 2 ....') }}">
            </div>
            <div class="col-4 d-flex align-items-center" style="margin-bottom: 10px;">
                <input type="text" wire:model.blur="city" id="city_0" class="p-0 k_input" {{ $this->blocked ? 'disabled' : '' }} placeholder="{{ __('City') }}">
            </div>
            <div class="col-4 d-flex align-items-center" style="margin-bottom: 10px;">
                <select wire:model="state" class="p-0 k_input" {{ $this->blocked ? 'disabled' : '' }} id="state_id_0">
                    <option value="">{{ __('State') }}</option>
                </select>
            </div>
            <div class="col-4 d-flex align-items-center" style="margin-bottom: 10px;">
                <input type="text" wire:model.blur="zip" id="zip_0" class="p-0 k_input" {{ $this->blocked ? 'disabled' : '' }} placeholder="{{ __('ZIP') }}">
            </div>
            <div class="col-12" style="margin-bottom: 10px;">
                <select wire:model.blur="country" class="p-0 k_input" {{ $this->blocked ? 'disabled' : '' }} id="country_id_0">
                    <option value="">{{ __('Country') }}</option>
                    @foreach(current_company()->countries as $key => $country)
                    <option value="{{ $country->id }}">{{ $country->common_name }}</option>
                    @endforeach
                </select>
            </div>

        </div>

    </div>
</div>
