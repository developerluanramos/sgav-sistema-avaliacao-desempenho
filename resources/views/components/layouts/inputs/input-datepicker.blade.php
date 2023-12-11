<div class="relative max-w-sm md:w-{{$lenght}} px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="grid-city">
        {{$label}}
    </label>
{{--    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">--}}
{{--        <svg class="w-4 ml-2 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">--}}
{{--            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>--}}
{{--        </svg>--}}
{{--    </div>--}}
    <input datepicker datepicker-autohide name="{{$name}}" type="text" class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:outline-none focus:bg-white focus:border-gray-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{$label}}">
</div>
