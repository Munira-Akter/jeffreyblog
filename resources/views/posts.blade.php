<x-layouts>
    @foreach ( $posts as $post)

    <article>
        {!! $post !!}
    </article>

   @endforeach
</x-layouts>
