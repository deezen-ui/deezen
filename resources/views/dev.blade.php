<x-layouts.app>
    <div x-data="{ singleAccordionItem: null }" class="p-5 space-y-5 text-gray-500">
        <h2>Single Mode Accordion</h2>
        <x-accordion :heading="'Accordion 1'" :content="'Content for accordion 1'" :id="'accordion-1'" :single="true" />
        <x-accordion :heading="'Accordion 2'" :content="'Content for accordion 2'" :id="'accordion-2'" :single="true" />
        <x-accordion :heading="'Accordion 3'" :content="'Content for accordion 3'" :id="'accordion-3'" :single="true" />
        <h2>Multiple Mode Accordion</h2>
        <x-accordion :heading="'Accordion 1'" :content="'Content for accordion 1'" :id="'accordion-4'" />
        <x-accordion :heading="'Accordion 2'" :content="'Content for accordion 2'" :id="'accordion-5'"  />
        <x-accordion :heading="'Accordion 3'" :content="'Content for accordion 3'" :id="'accordion-6'" />
        <x-accordion :id="'accordion-4'">
            <x-slot name="heading">
                Accordion 4
            </x-slot>

            <x-slot name="content">
                <p>Content for accordion 4</p>
            </x-slot>
        </x-accordion>
    </div>
</x-layouts.app>