<div>
    <!-- Kanban -->
    <div class="mt-3 container-fluid">
        <div class="row">
            @foreach($this->data() as $row)
            @foreach($this->cards() as $card)
            <x-dynamic-component
                :component="$card->component"
                :value="$card"
                :model="$row"
                :key="$row[$card->key]"
                :id="$row->id"
            >
            </x-dynamic-component>
            @endforeach
            @endforeach
        </div>
    </div>
</div>