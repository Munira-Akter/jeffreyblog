@if (session() -> has('success'))

<div x-data="{show : true}"
 x-init="setTimeout(() => show = false , 3000)"  x-show="show" class="rounded-2 text-white text-sm tex-bold bg-blue-500 p-2 text-center fixed bottom-3 right-2"
 >
    <p>{{ session('success') }}</p>
</div>

@endif
