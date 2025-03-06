<x-layouts.app>
    <div class="min-h-screen w-full flex flex-col justify-center items-center relative gap-5 dark:bg-gray-950 bg-white">
        <div class="absolute -mt-[20rem] z-20 w-[200px] p-5 blur-2xl transform rotate-12 bg-gradient-to-r from-blue-500 to-red-500 dark:from-blue-800 dark:to-red-800"></div>
       <div class="flex flex-col gap-5 items-center space-x-4">
        <div class="flex gap-10 ">
            <img src="http://localhost:5173/img/deezen-ui.svg" class="max-w-[120px]" alt="">
            <img src="http://localhost:5173/img/laravel.svg" class="max-w-[120px]" alt="">
        </div>
        <h1 class="text-5xl font-bold text-neutral-700 dark:text-gray-300 tracking-tighter">Deezen UI + Laravel</h1>
       </div>
        <h3 class="mt-4 font-semibold text-gray-500 dark:text-gray-600">Make by <span class="font-bold text-neutral-800 dark:text-gray-400">Two Villains</span>, Deezen UI is build with TailwindCSS and AlpineJS</h3>

        <div class="mt-8" x-data="{ counter: 0 }">
            <button class="bg-gray-100 dark:bg-gray-900 px-4 py-2 rounded-lg cursor-pointer dark:text-gray-500 dark:hover:text-white font-semibold dark:hover:bg-gray-600 hover:bg-blue-100 active:ring-1 active:ring-offset-1 active:shadow ring-blue-500" x-on:click="counter++">
                Count is <span x-text="counter"></span>
            </button>
        </div>
    </div>
</x-layouts.app>
