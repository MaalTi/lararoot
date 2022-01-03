@props(['route','active','droppable','expanded'])

@php
$classes = ($active ?? false)
? 'bg-gray-600 bg-opacity-25 text-gray-100 border-l-4 border-gray-100'
: 'text-warmgray-500 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100';
@endphp

<a x-bind:href="droppable ? '#' : {{ route($route) }}" {{ $attributes->merge(['class' => $classes]) }} x-data="{ [expanded: {{ $expended ?? false }}, droppable: {{ $droppable ?? false }}] }" x-cloak>

    {{ $slot }}
    <template x-if="droppable">
        <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-4 h-4 transition-all transform -translate-y-1/2 top-1/2 right-3" x-bind:class="expanded ? '' : '-rotate-90'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </template>
</a>
