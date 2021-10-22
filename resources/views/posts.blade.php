<x-layouts>
    @foreach ( $post as $posts)

    <article>
      <h1><a href="/post/{{ $posts -> slug }}">{{ $posts -> title }}</a></h1>
      <span>{{ $posts -> date }}</span>
      <span>{{ $posts -> category -> name }}</span>
      <p>{{ $posts -> excerpt }}</p>
    </article>

   @endforeach
</x-layouts>
