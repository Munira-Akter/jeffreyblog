@props(['comment'])

    <article class="flex p-4 my-3 space-x-4 bg-gray-100 border border-gray-200 rounded-xl">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/60?u={{ $comment -> id }}" width="60" height="60" class="rounded-xl">
        </div>

        <div>
            <header class="mb-4">
                <h3 class="font-bold ">{{ $comment -> user -> username }}</h3>
                <p class="text-xs">Posted by <time>{{ $comment -> created_at->diffForHumans() }}</time></p>
            </header>

            <p class="text-sm">{{ $comment -> body }}</p>
        </div>
    </article>

