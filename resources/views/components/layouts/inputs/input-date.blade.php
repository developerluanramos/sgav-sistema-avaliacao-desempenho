<div class="w-full md:w-6/12 px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="{{ $name }}">
        {{ $label }}
    </label>
    <input
        type="date"
        name="{{ $name }}"
        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        value="{{ $value }}"
    />
</div>
