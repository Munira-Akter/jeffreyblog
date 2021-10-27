<!doctype html>

<title>Laravel Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="//unpkg.com/alpinejs" defer></script>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">

        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="{{ asset('images\Blogger_logo.svg.png') }}" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="flex mt-8 md:mt-0">

                @auth

                <x-dropdown>
                    <x-slot name="trigger">
                        <button  class="mt-2 text-xs font-bold uppercase">Welcome {{ auth()->user()->username }}</button>
                    </x-slot>

                    <div x-show="show" style="max-height:300px; overflow:auto !important; padding: 10px; display:none; position: absolute; z-index:999; background:rgb(248, 245, 245); width:100%; border-radius:5px;" >
                        @if (auth()->user()->username == 'Munira')
                        <a href="/admin" class="text-xs font-bold uppercase">Dashboard</a> <br>

                        @endif
                        <a href="#" class="text-xs font-bold uppercase" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Logout</a> <br>




                    <form id="logout-form" class="hidden" action="/logout" method="post" >
                        @csrf

                     </form>

                    </div>

                 </x-dropdown>

                    @endauth
                    @guest
                    <a href="/register" class="mt-2 text-xs font-bold uppercase">Register</a>
                    <a href="/login" class="mt-2 ml-6 text-xs font-bold uppercase" >LogIn</a>
                @endguest



                <a href="#" class="px-5 py-3 ml-3 text-xs font-semibold text-white uppercase bg-blue-500 rounded-full">
                    Subscribe for Updates
                </a>
            </div>
        </nav>
        {{ $slot }}
        <footer class="px-10 py-16 mt-16 text-center bg-gray-100 border border-black border-opacity-5 rounded-xl">
            <img src="{{ asset('images/lary-newsletter-icon.svg') }}" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="mt-3 text-sm">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto rounded-full lg:bg-gray-200">

                    <form method="POST" action="#" class="text-sm lg:flex">
                        <div class="flex items-center lg:py-3 lg:px-5">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                   class="py-2 pl-4 lg:bg-transparent lg:py-0 focus-within:outline-none">
                        </div>

                        <button type="submit"
                                class="px-8 py-3 mt-4 text-xs font-semibold text-white uppercase transition-colors duration-300 bg-blue-500 rounded-full hover:bg-blue-600 lg:mt-0 lg:ml-3"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>



    </section>

    <x-flash-message />
</body>
