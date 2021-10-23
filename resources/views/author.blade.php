<x-layouts>

    @foreach ($user->posts as $post)
    <article>
        <h1>{{ $post -> title }}</h1>
        <p>{{ $post -> body }}</p>

    </article>

    @endforeach



       <a href="/">Back to Home Page</a>

   </x-layouts>
