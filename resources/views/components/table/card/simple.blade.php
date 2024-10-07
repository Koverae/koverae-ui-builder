@props([
    'value',
    'model',
    'id'
])

<div class="mb-1 col-sm-3">
    <a class="card" wire:navigate href="{{ $this->showRoute($id) }}">
        <div class="d-flex">
            <img src="{{ $model['avatar'] ? Storage::url('avatars/' . $model['avatar']) . '?v=' . time() : asset('assets/images/default/user.png') }}" alt="{{ $model['avatar'] }}" class="img img-fluid" height="120px" width="120px">
            <div class="p-2 card-body text-truncate">
                <h5 class="mb-2 card-title"> {{ $model[$value->title] }} </h5>
                @foreach($this->data as $data)
                <span class="mb-1 cursor-pointer text-truncate w-100">{{ $model[$data] }}</span> <br>
                @endforeach
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>
    </a>
</div>