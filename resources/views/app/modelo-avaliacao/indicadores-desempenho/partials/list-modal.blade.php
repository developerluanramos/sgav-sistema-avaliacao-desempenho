@php
    $faker = Faker\Factory::create();
@endphp

<ul class="w-full px-4 py-2 space-y-1 text-gray-700 list-inside dark:text-gray-400">
    @for($i = 0; $i < 5; $i++)
        <li class="flex items-center justify-between">
            <span>{{ $faker->catchPhrase }}</span>
            <div class="flex items-center justify-end space-x-1">
                <x-layouts.buttons.edit-action-button
                color="primary"
                :identificador="'modalFatorAvaliacao'"
                />
                <x-layouts.buttons.submit-delete-button
                color="danger"
                />
            </div>
        </li>
    @endfor
</ul>
