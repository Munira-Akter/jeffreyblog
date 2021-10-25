<x-dropdown>

    <x-slot name="trigger">
        <button class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
            Catgeory
        </button>
    </x-slot>


        <div x-show="show" style="max-height:300px; overflow:auto !important; padding: 5px; display:none; position: absolute; z-index:999; background:rgb(248, 245, 245); width:100%; border-radius:5px;" >
            @foreach ($categories as $category)
            <a style="display:block;" class="hover:bg-blue" href="/?category={{ $category -> slug }}&{{ http_build_query(request()->except('category')) }}">{{ $category -> name }}</a>
            @endforeach

        </div>
    </x-dropdown>

