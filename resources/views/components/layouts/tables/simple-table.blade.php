<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
            <table style="width: 100%;" class="table-auto min-w-full text-left text-sm font-light">
                <thead>
                    <tr>
                        @foreach ($headers as $header)
                            <th>{{$header}}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @yield('table-content')
                </tbody>
            </table>
            <x-pagination.simple-pagination :paginator="$paginator" :appends="$appends" />
        </div>
       </div>
    </div>
</div>
