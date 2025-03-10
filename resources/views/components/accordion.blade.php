@props(['heading' => '', 'content' => '', 'id' => '', 'single' => false])
@php
    $baseClass = "flex flex-col gap-2 font-semibold max-w-lg focus:outline-none border-b border-gray-700 transition cursor-pointer";
    $accordionClass = "{$baseClass} text-white";
@endphp

@if(!$single)
<div x-data="{ isExpanded: false }" {{ $attributes->merge(['class' => $accordionClass]) }}>
    <div  id="controlAccordion-{{ $id }}" class="pb-2 flex justify-between" x-on:click="isExpanded = ! isExpanded"  x-bind:aria-expanded="isExpanded ? 'true' : 'false'" aria-controls="accordionAriaControl-{{ $id }}">
        <h1 class="text-lg">{{ $heading }}</h1>
        <iconify-icon icon="heroicons-solid:chevron-down" class="text-2xl" x-bind:class="{'transform rotate-180': isExpanded}"></iconify-icon>
    </div>
    <div 
        x-cloak
        class="transition-all pr-3 text-sm text-gray-400 overflow-hidden cursor-text"
        x-bind:class="isExpanded ? 'h-auto pb-3' : 'h-0 pb-0'"
        x-collapse
    >
        <p>{{ $content }}</p>
    </div>
</div>
@else
<div {{ $attributes->merge(['class' => $accordionClass]) }}>
    <div  id="controlAccordion-{{ $id }}" class="pb-2 flex justify-between" 
         x-on:click="singleAccordionItem = '{{ $id }}'"
         x-bind:aria-expanded="singleAccordionItem === '{{ $id }}' ? 'true' : 'false'" 
         aria-controls="accordionAriaControl-{{ $id }}">
        <h1 class="text-lg">{{ $heading }}</h1>
        <iconify-icon icon="heroicons-solid:chevron-down" class="text-2xl" 
                      x-bind:class="singleAccordionItem === '{{ $id }}' ? 'transform rotate-180' : ''"></iconify-icon>
    </div>
    <div 
        x-cloak
        class="transition-all pr-3 text-sm text-gray-400 overflow-hidden cursor-text"
        x-bind:class="singleAccordionItem === '{{ $id }}' ? 'h-auto pb-3' : 'h-0 pb-0'"
        x-collapse
    >
        <div>
            {{ $content }}
        </div>
    </div>
</div>

@endif