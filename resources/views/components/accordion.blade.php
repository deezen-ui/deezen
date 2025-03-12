{{-- @uses('accordion.item')  --}}

@props(['mode' => 'single'])

<div x-data="{  
        mode: '{{ $mode }}',
        openItems: '{{ $mode }}' === 'single' ? null : []} 
        " class="flex flex-col gap-1 ">
   {{ $slot }}
</div>