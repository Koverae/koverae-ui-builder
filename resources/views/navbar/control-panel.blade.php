<div>
    <div class="gap-3 px-3 k_control_panel d-flex flex-column gap-lg-1 sticky-top">
      <div class="flex-wrap gap-5 k_control_panel_main d-flex flex-nowrap justify-content-between align-items-lg-start flex-grow-1">
          <!-- Breadcrumbs -->
          <div class="gap-1 k_control_panel_breadcrumbs d-flex align-items-center order-0 h-lg-100">
              <!-- Create Button -->
              @if($this->new)
              <a href="{{ $new }}" wire:navigate class="btn btn-outline-primary k_form_button_create">
                  {{ __('New') }}
              </a>
              @endif
              @if($this->add)
              <a wire:click="add" class="btn btn-outline-primary k_form_button_create">
                  {{ $createButtonLabel }}
              </a>
              @endif
                @php
                    $filteredBreadcrumbs = array_filter($breadcrumbs, function($breadcrumb) {
                        return $breadcrumb['url'] && $breadcrumb['url'] != route('main', ['subdomain' => current_company()->domain_name]) && $breadcrumb['label'] != 'Inventory' && $breadcrumb['url'] != url()->current();
                    });
                @endphp
                <div class="min-w-0 gap-2 k_last_breadcrumb_item active align-items-center lh-sm">
                    @if($filteredBreadcrumbs)
                        @if($showBreadcrumbs)
                        <span>
                            @foreach($filteredBreadcrumbs as $breadcrumb)
                                @if($breadcrumb['url'])
                                <a href="{{ $breadcrumb['url'] }}" wire:navigate class="fw-bold text-truncate text-decoration-none">
                                    {{ $loop->index > 0 ? "/" : '' }}{{ $breadcrumb['label'] }}
                                </a>
                                @else
                                <a class="fw-bold text-truncate text-decoration-none" aria-current="page">
                                    {{ $breadcrumb['label'] }} {{ config('inventory.config.name') }}
                                </a>
                                @endif
                            @endforeach
                        </span>
                        @endif
                    @endif
                    <div class="gap-1 d-flex">
                        <span class="min-w-0 text-truncate " style="height: 19px;">
                            {{ $this->currentPage }}
                        </span>
                        <div class="gap-1 k_cp_action_menus d-flex align-items-center pe-2">
                            <div class="k_dropdown dropdown lh-1 dropdown-no-caret" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-gear" wire:loading.remove></i>
                                <span wire:loading>...</span>
                            </div>
                            <ul class="k_dropdown_menu dropdown-menu lh-base">

                                @foreach($this->actionButtons() as $action_button)
                                <x-dynamic-component
                                    :component="$action_button->component"
                                    :value="$action_button"
                                >
                                </x-dynamic-component>
                                @endforeach

                            </ul>
                        </div>
                        @if($this->showIndicators)
                        <div class="k_form_status_indicator_buttons d-flex">
                            <button wire:loading.remove wire:click.prevent="saveUpdate()" wire:target="saveUpdate()" class="px-1 py-0 k_form_button_save btn-light rounded-1 lh-sm">
                                <i class="bi bi-cloud-arrow-up-fill"></i>
                            </button>
                            <button wire:click.prevent="resetForm()" wire:loading.remove class="px-1 py-0 k_form_button_save btn-light lh-sm">
                                <i class="bi bi-arrow-return-left"></i>
                            </button>
                            <span wire:loading wire:target="saveUpdate()">...</span>
                        </div>
                        @endif
                    </div>
                </div>
          </div>

          <!-- Actions / Search Bar -->
          <div class="order-2 k_panel_control_actions d-flex align-items-center justify-content-start order-lg-1 w-100 w-lg-auto justify-content-lg-around">

          </div>

          <!-- Navigations -->
          <div class="flex-wrap order-1 k_control_panel_navigation d-flex flex-md-wrap align-items-center justify-content-end gap-l-1 gap-xl-5 order-lg-2 flex-grow-1">
            <!-- Pagination -->
            {{-- @if($showPagination)
                {{ $this->data()->links() }}
            @endif --}}
            <!-- End Pagination -->

            <!-- Display panel buttons -->
            <div class="k_cp_switch_buttons d-print-none d-xl-inline-flex btn-group">
                <!-- Button view -->
                @foreach($this->switchButtons() as $switchButton)
                <x-dynamic-component
                    :component="$switchButton->component"
                    :value="$switchButton"
                    {{-- :status="$status" --}}
                >
                </x-dynamic-component>
                @endforeach
            </div>
          </div>
      </div>
    </div>
</div>
