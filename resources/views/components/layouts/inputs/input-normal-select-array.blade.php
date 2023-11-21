<div class="w-full md:w-{{$lenght}} px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="{{$name}}">
        {{$label}}
    </label>
    <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-black py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="{{$name}}" name="{{$name}}">
            <option value=""></option>
            @foreach($data as $item)
                @if (isset($value) && !is_null($value))
                 @php
                 $selected= '';
                     if ($item['uuid'] == $value) {
                        $selected = "selected";
                     }
                 @endphp
                    <option {{$selected}} value="{{ $item['uuid'] }}">{{ $item['descricao'] }}</option>
                @else
                    <option value="{{ $item['uuid'] }}">{{ $item['descricao'] }}</option>
                @endif
            @endforeach
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
    </div>
</div>