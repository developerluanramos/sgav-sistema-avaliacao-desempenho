@php
    $faker = Faker\Factory::create();
@endphp

<ul class="max-w-md ml-4 py-2 space-y-1 text-gray-700 list-disc list-inside dark:text-gray-400">
    @for($i = 0; $i < 5; $i++)
        <li>
            {{ $faker->catchPhrase }}
        </li>
    @endfor
</ul>
