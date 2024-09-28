<div>
    <div class="k_form_sheet_bg">
        <!-- Notify -->
        <!-- Status bar -->
        @if(count($this->actionBarButtons()) >= 1 || count($this->statusBarButtons()) >= 1)
        <div class="pb-2 mb-0 k_form_statusbar position-relative d-flex justify-content-between mb-md-2 pb-md-0">


            <!-- Status Bar -->
            @if($this->statusBarButtons())
                <div id="status-bar" class="k_statusbar_buttons_arrow d-none d-md-flex align-items-center align-content-around ">

                    @foreach($this->statusBarButtons() as $status_button)
                    <x-dynamic-component
                        :component="$status_button->component"
                        :value="$status_button"
                        :status="$status"
                    >
                    </x-dynamic-component>
                    @endforeach
                </div>
                <div id="status-bar" class="k_statusbar_buttons_arrow d-flex d-md-none align-items-center align-content-around ">

                    @foreach($this->statusBarButtons() as $status_button)
                        @if($this->status == $status_button->primary)
                        <x-dynamic-component
                            :component="$status_button->component"
                            :value="$status_button"
                            :status="$status"
                        >
                        </x-dynamic-component>
                        @endif
                    @endforeach
                </div>
            @endif

            <!-- Status Bar -->
            @if($this->statusBarButtons())
            <div id="status-bar" class="k_statusbar_buttons_arrow d-flex align-items-center align-content-around ">

                @foreach($this->statusBarButtons() as $status_button)
                <x-dynamic-component
                    :component="$status_button->component"
                    :value="$status_button"
                    :status="$status"
                >
                </x-dynamic-component>
                @endforeach
            </div>
            @endif

        </div>
        @endif
        <form wire:submit.prevent="{{ $this->form() }}">
            @csrf
            <!-- Sheet Card -->
            <div class="k_form_sheet position-relative">
                <!-- title-->
                <div class="m-0 mb-2 row justify-content-between position-relative w-100">
                    <div class="ke_title mw-75 pe-2 ps-0">
                        @foreach($this->inputs() as $input)
                            @if($input->position == 'top-title' && $input->tab == 'none')
                                <x-dynamic-component
                                    :component="$input->component"
                                    :value="$input"
                                >
                                </x-dynamic-component>
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Right Side -->
                @foreach($this->groups() as $group)
                    @if($group->tab == 'none' || $group->tab = null)
                        <x-dynamic-component
                            :component="$group->component"
                            :value="$group"
                        >
                        </x-dynamic-component>
                    @endif
                @endforeach

                @if($this->tabs())
                <div class="k_notebokk_headers">
                    <!-- Tab Link -->
                    <ul class="flex-row nav nav-tabs flex-nowrap" data-bs-toggle="tabs">
                        @foreach ($this->tabs() as $tab)
                        <li class="nav-item">
                            <a class="nav-link {{ $tab->key == 'order' || $tab->key == 'purchase' || $tab->key == 'general' ? 'active' : '' }}" data-bs-toggle="tab" href="#{{ $tab->key }}">{{ $tab->label }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- Tab Content -->
                @foreach ($this->tabs() as $tab)
                <x-dynamic-component
                    :component="$tab->component"
                    :value="$tab"
                >
                </x-dynamic-component>
                @endforeach

            </div>
        </form>

    </div>
    <!-- Loading -->
    <div class="pb-1 cursor-pointer k-loading" wire:loading>
        <p>En cours de chargement ...</p>
    </div>

</div>
