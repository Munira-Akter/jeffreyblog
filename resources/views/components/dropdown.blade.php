@props(['trigger'])
<div x-data={show:false} @click.away="show = false" class="relative">
<div @click= "show = ! show" class="relative">
    {{ $trigger }}
</div>
 {{ $slot }}
</div>

