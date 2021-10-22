<x-layouts>

    @foreach ($category -> posts as $post)
    <article>
        <h1>{{ $post -> title }}</h1>
        <span>{{$post->category->name }}</span>
        <p>{{ $post -> body }}</p>

    </article>

    @endforeach



       <a href="/">Back to Home Page</a>

   </x-layouts>
