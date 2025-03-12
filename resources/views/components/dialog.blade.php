@props(['heading' => "Dialog", 'animations', 'type' => 'normal'])

<div x-data="{ showDialog: false, animate: false }">
    <div x-on:click="showDialog = !showDialog">
        {{ $trigger }}
    </div>
    <div  x-show="showDialog"
        x-transition
        class="z-40 bg-gray-700/20 transition-opacity dark:bg-gray-900/50 w-full fixed top-0 h-screen flex justify-center items-center"
        {!! $type != 'confirm' ? 'x-on:keydown.escape.window="showDialog = false"' : 'x-on:keydown.escape.window="animate = !animate"' !!}>
        
        <div  x-bind:class="animate ? 'animate__animated animate__shakeX' : ''"  {!! $type != 'confirm' ? 'x-on:click.outside="showDialog = false"' : 'x-on:click.outside="animate = !animate"'  !!}  x-bind:class="" class="bg-white dark:bg-gray-900 max-w-2xl w-full  p-5 rounded-lg shadow-lg">
            <div class="flex justify-between items-center" >
                <h1 class="text-xl font-semibold dark:text-white select-none">{{ $heading }} </h1>
               @if ($type != 'confirm')
                <button x-on:click="showDialog = false" class="text-gray-500 dark:text-gray-400 cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                @endif
            </div>

            <div class="mt-3 dark:text-gray-500 text-gray-500">
                {{ $slot }}
            </div>

            <div class="flex gap-2 justify-end">
                <x-button variant="outline" class="mt-4" x-on:click="showDialog = false">Close</x-button>
                <span x-on:click="showDialog = false">
                    {{ $action ?? '' }}
                </span>
            </div>
        </div>
    </div>
</div>
