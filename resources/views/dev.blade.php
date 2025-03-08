<x-layouts.app>
    <div x-data="" class="p-5 space-y-5">
        <x-alert type="info" icon="mdi:car-outline" variant="outline">
            <x-slot name="title">Info</x-slot>
            <x-slot name="message">This is an info alert!</x-slot>
        </x-alert>
        <x-alert type="secondary" variant="outline">
            <x-slot name="title">Caution!</x-slot>
            <x-slot name="message">This feeling not controllable, but it's okay. </x-slot>
        </x-alert>
    </div>
</x-layouts.app>