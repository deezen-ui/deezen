@props(['id' => uniqid(), 'heading', 'content'])

@php
    $baseClass = "flex flex-col gap-1 font-semibold max-w-lg focus:outline-none border-b border-gray-700 transition cursor-pointer p-1 mb-2";
    $accordionClass = "{$baseClass} text-white";
@endphp


<div {{ $attributes->merge(['class' => $accordionClass]) }}>
    <div  id="controlAccordion-{{ $id }}" class="flex justify-between" 
        x-on:click="if (mode === 'single') {
            openItems = (openItems === '{{ $id }}') ? null : '{{ $id }}';
            } else {
                openItems.includes('{{ $id }}') 
                ? openItems = openItems.filter(i => i !== '{{ $id }}') 
                : openItems.push('{{ $id }}');
                }"
        aria-controls="accordionAriaControl-{{ $id }}">
        
        <h1 class="text-[14px] font-semibold">{{ $heading }}</h1>

        <iconify-icon 
            icon="heroicons-solid:chevron-down" 
            class="text-[14px] transition-all"  
            x-bind:class="(mode === 'single' ?  openItems === '{{ $id }}' : openItems.includes('{{ $id }}')) ?  'transform rotate-180' : ''">
        </iconify-icon>

    </div>
    
    <div 
        x-cloak
        class="transition-all pr-3 font-normal  text-[14px] text-wrap text-gray-400 cursor-text overflow-hidden"
        x-bind:class="(mode === 'single' ?  openItems === '{{ $id }}' : openItems.includes('{{ $id }}')) ? 'h-auto pb-1' : 'h-0 pb-0'"
    >
        <div>
            {{ $slot }}
        </div>
    </div>
</div>