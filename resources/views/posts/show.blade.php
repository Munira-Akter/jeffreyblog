
<x-layouts>
    <main class="max-w-6xl mx-auto mt-10 space-y-6 lg:mt-20">
        <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
            <div class="col-span-4 mb-10 lg:text-center lg:pt-14">
                <img src="{{asset('storage/'.$post -> thumbnail)}}" alt="" class="rounded-xl w-full">

                <p class="block mt-4 text-xs text-gray-400">
                    Published <time>{{ $post -> created_at-> diffForHumans() }}</time>
                </p>

                <div class="flex items-center mt-4 text-sm lg:justify-center">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3 text-left">
                        <h5 class="font-bold">{{ $post -> author -> name }}</h5>
                        <h6>Mascot at Laracasts</h6>
                    </div>
                </div>
            </div>

            <div class="col-span-8">
                <div class="justify-between hidden mb-6 lg:flex">
                    <a href="/"
                        class="relative inline-flex items-center text-lg transition-colors duration-300 hover:text-blue-500">
                        <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path class="fill-current"
                                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                </path>
                            </g>
                        </svg>

                        Back to Posts
                    </a>

                    <div class="space-x-2">
                       <x-button :post="$post->category" />
                    </div>
                </div>

                <h1 class="mb-10 text-3xl font-bold lg:text-4xl">
                    {{$post -> title}}
                </h1>

                <div class="space-y-4 leading-loose lg:text-lg">
                    <p>{{ $post -> body }}</p>
                </div>
            </div>

            <section class="col-span-8 col-start-5 mt-10 ">
                <div>
                  @auth
                  <form class="p-4 mb-10 space-x-4 bg-gray-100 border border-gray-200 rounded-xl" method="POST" action="/post/{{ $post -> slug }}/comment">
                    @csrf
                    <div class="flex items-center ">
                        <img src="https://i.pravatar.cc/40?u={{ $post -> id }}" width="40" height="40" class="mr-2 rounded-xl">
                        @if(auth()->check())
                        <h6>{{ auth()->user()->name }}</h6>
                        @else
                        <h6>Hi! Want to part of discusion?</h6>
                        @endif
                    </div>

                    <textarea name="body" class="w-full p-2 m-5 focus:none" placeholder="let us know your valuable comment"></textarea>

                    <hr>
                    <br>

                    <button class="px-5 py-2 text-sm font-bold text-white bg-blue-500 rounded-xl">Post</button>
                </form>
                      @else

                      <p class="my-3 text-red-400 font-samibold"><a class="underline" href="/register">Register</a> or <a href="/login" class="underline" >LogIn </a>first to leave a comment</p>

                  @endauth
                </div>
                    @forelse ($post -> comments as $comment)
                            <x-post-comment :comment="$comment"/>
                    @empty
                        <p>Be the first to comment..</p>
                    @endforelse

            </section>
        </article>
    </main>


</x-layouts>
