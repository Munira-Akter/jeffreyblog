<x-layouts>
    @foreach ( $post as $posts)

    <article>
      <h1><a href="/post/{{ $posts -> slug }}">{{ $posts -> title }}</a></h1>
      <span>{{ $posts -> date }}</span>
      <a href="/posts/category/{{ $posts -> category -> slug }}"><span>{{ $posts -> category -> name }}</span></a>
      <p>{{ $posts -> excerpt }}</p>
    </article>

   @endforeach
</x-layouts>
