<x-layouts.app>
    <div x-data="{ counter: 0 }" class="min-h-screen w-full flex flex-col justify-center items-center text-center p-5 relative gap-5 ">
        <div class="absolute -mt-[20rem] z-20 w-[200px] p-5 blur-2xl transform rotate-12 bg-gradient-to-r from-blue-500 to-red-500 dark:from-blue-800 dark:to-red-800"></div>
       <div class="flex flex-col gap-5 items-center space-x-4">
        <div class="flex gap-10 ">
            <img src="http://localhost:5173/img/deezen-ui.svg" class="max-w-[120px]" alt="">
            <img src="http://localhost:5173/img/laravel.svg" class="max-w-[120px]" alt="">
        </div>
        <h1 class="text-5xl  font-bold text-neutral-700 dark:text-gray-300 tracking-tighter">Deezen UI + Laravel</h1>
       </div>
       <h3 class="mt-4 font-semibold text-gray-500 dark:text-gray-600">
        Made by 
        <a class="cursor-pointer" x-on:click="() => { window.open('https://github.com/irsyadulibad', '_blank'); setTimeout(() => window.open('https://github.com/sahrullahh', '_blank'), 100); }">
          <span class="font-bold text-neutral-800 dark:text-gray-400 hover:underline">Two Villains</span>
        </a>, Deezen UI is built with TailwindCSS and AlpineJS
      </h3>
      
        <div class="mt-8" >
            <x-button variant="secondary" x-on:click="counter++">
                Count is <span x-text="counter"></span>
            </x-button>
        </div>
    </div>

</x-layouts.app>
