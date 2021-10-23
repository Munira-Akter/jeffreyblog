<x-layouts>

    @includeIf('_header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if($posts->count())

        <x-featured-post :post="$posts[0]"/>



       <div class="lg:grid lg:grid-cols-6">

        @foreach ($posts->skip(1)->take(5) as $post )


        <x-post-card  :post="$post" class="{{ $loop -> iteration > 2 ? 'col-span-2' : 'col-span-3'}}" />

        @endforeach



        </div>

        @endif





    </main>

</x-layouts>
