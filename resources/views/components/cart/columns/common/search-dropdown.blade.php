@props([
    'value',
    'index',
    'input',
])

<div>
    <livewire:search.dynamic-search-dropdown
    :index="$index"
    :model="$value->model"
    :searchAttributes="['product_name', 'product_code']"
    :additionalCriteria="['status' => 'active']"/>
</div>
