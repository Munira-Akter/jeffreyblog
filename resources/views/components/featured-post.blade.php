@props(['post'])

<article
class="transition-colors duration-300 border border-black border-opacity-0 hover:bg-gray-100 hover:border-opacity-5 rounded-xl">
<div class="px-5 py-6 lg:flex">
    <div class="flex-1 lg:mr-8">
        <img src="{{asset('storage/'.$post -> thumbnail)}}" alt="Blog Post illustration" class="w-full rounded-xl">
    </div>

    <div class="flex flex-col justify-between flex-1">

        <header class="mt-8 lg:mt-0">

         <x-button :post="$post->category" />


            <div class="mt-4">
                <h1 class="text-3xl">
                  {{ $post -> title }}
                </h1>

                <span class="block mt-2 text-xs text-gray-400">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
            </div>
        </header>

        <div class="mt-2 text-sm">
            <p>
               {{ $post -> excerpt }}
            </p>


        </div>

        <footer class="flex items-center justify-between mt-8">
            <div class="flex items-center text-sm">
                <img src="./images/lary-avatar.svg" alt="Lary avatar">
                <div class="ml-3">
                    <h5 class="font-bold"><a href="/?author={{ $post -> author -> id }}&{{ http_build_query(request()->except('author')) }}">{{ $post -> author -> name }}</a></h5>
                    <h6>Mascot at Laracasts</h6>
                </div>
            </div>

            <div class="hidden lg:block">
                <a href="/post/{{ $post->slug }}"
                   class="px-8 py-2 text-xs font-semibold transition-colors duration-300 bg-gray-200 rounded-full hover:bg-gray-300"
                >Read More</a>
            </div>
        </footer>
    </div>
</div>
</article>
