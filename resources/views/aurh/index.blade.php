<x-layouts>

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <h1 class="text-center text-bold text-lg my-10">Register Now</h1>
        <form action="/register" method="post" class="bg-gray-100 p-10 max-w-2xl  mx-auto">
            @csrf

            <div class="mb-6">
              <label for="" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name<span class="text-red-700">*</span></label>
              <input type="text" value="{{ old('name') }}"
                class="form-control p-2  border border-gray-400 w-full border-opacity-6" name="name" id="name"  placeholder="">
                @error('name')
                    <p class="text-xs text-bold text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username<span class="text-red-700">*</span></label>
                <input type="text" value="{{ old('username') }}"
                  class="form-control p-2  border border-gray-400 w-full border-opacity-6" name="username" id="username"  placeholder="">
                  @error('username')
                  <p class="text-xs text-bold text-red-500">{{ $message }}</p>
              @enderror
              </div>

              <div class="mb-6">
                <label for="" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email Address<span class="text-red-700">*</span></label>
                <input type="text" value="{{ old('email') }}"
                  class="form-control p-2  border border-gray-400 w-full border-opacity-6" name="email" id="email"  placeholder="">
                  @error('email')
                  <p class="text-xs  text-bold text-red-500">{{ $message }}</p>
              @enderror
              </div>

              <div class="mb-6">
                <label for="" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password<span class="text-red-700">*</span></label>
                <input type="password" value="{{ old('password') }}"
                  class="form-control p-2  border border-gray-400 w-full border-opacity-6" name="password" id="password"  placeholder="">
                  @error('password')
                  <p class="text-xs text-bold text-red-500">{{ $message }}</p>
              @enderror
              </div>


              <div class="mb-6">
                <button type="submit" class="w-full bg-blue-500 py-2 text-bold text-white-600">Register</button>
              </div>





        </form>
    </main>

</x-layouts>
