@props(['post'])

<div class="space-x-2">
    <a href="/?category={{$post-> slug}}"
       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
       style="font-size: 10px">{{ $post->name }}</a>
</div>
