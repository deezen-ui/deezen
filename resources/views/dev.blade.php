<x-layouts.app>
<div class="">
    <x-dialog heading="Dialog1">
       <x-slot name="trigger">
            <x-button variant="secondary" >
                Click me
            </x-button>
       </x-slot>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia sunt quibusdam ullam perferendis omnis culpa consectetur, fugiat, modi veniam blanditiis consequatur sapiente ea exercitationem eius suscipit. Repellat, vero quisquam. Sequi.</p>
        <x-slot name="action">
            <x-button variant="secondary" class="mt-4">Continue</x-button>
        </x-slot>
    </x-dialog>
    <x-dialog heading="Dialog2" type="confirm">
       <x-slot name="trigger">
            <x-button variant="secondary" >
                Click me
            </x-button>
       </x-slot>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia sunt quibusdam ullam perferendis omnis culpa consectetur, fugiat, modi veniam blanditiis consequatur sapiente ea exercitationem eius suscipit. Repellat, vero quisquam. Sequi.</p>
        <x-slot name="action">
            <x-button variant="secondary" class="mt-4">Continue</x-button>
        </x-slot>
    </x-dialog>
</div>
</x-layouts.app>