@props([
    'variant' => 'primary', 
])

@php
  
    $baseClass = 'px-4 py-2 select-none flex font-semibold items-center gap-1.5 rounded-lg focus:outline-none transition cursor-pointer shadow ';


    $variantClasses = [
        'primary' => 'bg-primary text-white hover:bg-primary-dark',
        'secondary' => 'bg-secondary text-gray-200 hover:bg-secondary-dark',
        'outline' => 'dark:border-gray-800 border border-gray-200 text-gray-700 dark:text-gray-400 dark:hover:bg-gray-800 hover:bg-gray-100',
        'danger'  => 'bg-danger text-white hover:bg-danger-dark',
        'warning' => 'bg-warning text-white hover:bg-warning-dark',
        'success' => 'bg-success text-white hover:bg-success-dark',
    ];


    $buttonClass = "{$baseClass} " . ($variantClasses[$variant] ?? $variant);
@endphp

<button  {{ $attributes->merge(['class' => $buttonClass]) }}>
    {{ $slot }}
</button>