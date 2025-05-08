@props([
    'size' => 'md',
    'src' => null,
    'alt' => null,
    'color' => 'blue',
    'name' => null,
    'circle' => false,
    'badge' => null,
])

@php

$sizeImage = [
    'sm' => 'w-8 h-8 text-sm',
    'md' => 'w-10 h-10 text-base',
    'lg' => 'w-12 h-12 text-lg',
    'xl' => 'w-16 h-16 text-2xl',
];

$size = $sizeImage[$size] ?? 'w-10 h-10';


$colors = [
    'red' => 'bg-red-100 text-red-500',
    'green' => 'bg-green-100 text-green-600',
    'yellow' => 'bg-yellow-100 text-yellow-500',
    'orange' => 'bg-orange-100 text-orange-500',
    'teal' => 'bg-teal-100 text-teal-500',
    'blue' => 'bg-blue-100 text-blue-500',
    'gray' => 'bg-gray-100 text-gray-500',
    'purple' => 'bg-purple-100 text-purple-500',
    'black' => 'bg-black-100 text-black-500',
    'neutral' => 'bg-neutral-100 text-neutral-500',
    'zinc' => 'bg-zinc-100 text-zinc-500',
    'slate' => 'bg-slate-100 text-slate-500',
    'stone' => 'bg-stone-100 text-stone-500',
];

$colorClass = $colors[$color] ?? 'bg-blue-100 text-blue-500';
$defaultName = 'MS';

@endphp

<div>
    @if($name === null && $src !== null)
        <img src="{{ $src }}" alt="{{ $alt }}" 
        class="{{ $circle ? 'rounded-full' : 'rounded-md' }} {{ $size }} ">
    @else 
        <div class="flex font-semibold {{ $colorClass }} items-center justify-center {{ $size }}  rounded-md">
           {{ $name ?? $defaultName }}
        </div>
    @endif
</div>
