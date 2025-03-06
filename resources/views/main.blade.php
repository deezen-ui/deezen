<x-layouts.app>
    <div class="min-h-screen w-full flex flex-col justify-center items-center">
        <h1 class="text-5xl font-bold">Deezen UI</h1>
        <h3 class="mt-4 font-semibold text-gray-700">Build with TailwindCSS and AlpineJS</h3>

        <div class="mt-8" x-data="{ counter: 0 }">
            <button class="bg-slate-100 px-4 py-2 rounded-lg cursor-pointer" x-on:click="counter++">
                Count is <span x-text="counter"></span>
            </button>
        </div>
    </div>
</x-layouts.app>
