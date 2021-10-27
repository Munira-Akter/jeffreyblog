<div>
    <aside class="w-50" style="height:500px; margin-top:120px; padding: 15px;background:rgb(248, 245, 245); width:100%; border-radius:5px;">
        <h5 class="block mb-10 text-xs font-bold text-gray-700 uppercase font-blue-400">Dashboard Panel</h5>
        <ul>
                <li><a href="/" class="block mb-2 text-xs font-bold text-gray-700 uppercase">Visit Site</a></li>
                <li><a href="/admin/" class="block mb-2 text-xs font-bold text-gray-700 uppercase {{ request()->is('/admin/posts') ? 'text-blue-500' : '' }}">All Post</a></li>
                <li><a href="/admin/create" class="block mb-2 text-xs font-bold text-gray-700 uppercase {{ request()->is('/admin/post/create') ? 'text-blue-500' : '' }}">Add New Post</a></li>
         </ul>
    </aside>
</div>
