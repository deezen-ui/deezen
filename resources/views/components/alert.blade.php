@props(['type' => 'info', 'variant' => 'solid', 'icon' => null])

@php
    $baseClass = "p-2 flex font-semibold items-center rounded-md focus:outline-none transition cursor-pointer";
    
    $colors = [
        'info' => [
            'solid' => "bg-primary text-white hover:bg-primary-dark",
            'outline' => "border border-primary bg-primary/10 text-primary hover:bg-primary/5",
        ],
        'secondary' =>  [
            'solid' => "bg-secondary text-white hover:bg-secondary-dark",
            'outline' => "border border-secondary bg-secondary/5 text-gray-400 hover:bg-secondary/10",
        ],
        'danger' => [
            'solid' => "bg-danger text-white hover:bg-danger-dark",
            'outline' => "border border-danger bg-danger/10 text-danger hover:bg-danger/5",
        ],
        'warning' => [
            'solid' => "bg-warning text-white hover:bg-warning-dark",
            'outline' => "border border-warning bg-warning/10 text-warning hover:bg-warning/5",
        ],
        'success' => [
            'solid' => "bg-success text-white hover:bg-success-dark",
            'outline' => "border border-success bg-success/10 text-success hover:bg-success/5",
        ],
    ];
    
    $color = $colors[$type] ?? 'primary';
    
    $defaultIcons = [
        'info' => [
            'solid' => 'mdi:information',
            'outline' => 'mdi:information-outline',
        ],
        'secondary' => [
            'solid' => 'eos-icons:loading',
            'outline' => 'eos-icons:loading',
        ],
        'success' => [
            'solid' => 'mdi:check-circle',
            'outline' => 'mdi:check-circle-outline',
        ],
        'danger' => [
            'solid' => 'mdi:alert-circle',
            'outline' => 'mdi:alert-circle-outline',
        ],
        'warning' => [
            'solid' => 'mdi:alert',
            'outline' => 'mdi:alert-outline',
        ],
    ];
    
    $icon = $icon ?? ($defaultIcons[$type][$variant] ?? $defaultIcons[$type]['solid']);
    
    $alertClass = "{$baseClass} " . ($colors[$type][$variant] ?? $colors[$type]['solid']);
@endphp

<div {{ $attributes->merge(['class' => $alertClass]) }}>
    <div class="flex gap-5 px-2 items-center">
        <div class="text-2xl">
            <iconify-icon icon="{{ $icon }}"></iconify-icon>
        </div>
        <div>
            <h1 class="text-lg font-bold">{{ $title }}</h1>
            <p class="text-sm font-semibold">{{ $message }}</p>
        </div>
    </div>
</div>