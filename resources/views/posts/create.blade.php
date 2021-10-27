<x-layouts>
    <main class="flex max-w-6xl mx-auto mt-6 space-y-6 lg:mt-20">
    <x-menu />
    <div class="flex-1">

        <h1 class="my-10 text-lg text-center text-bold">Add New Post</h1>
        <form action="/admin" method="POST" class="max-w-2xl p-10 mx-auto bg-gray-100" enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
              <label for="" class="block mb-2 text-xs font-bold text-gray-700 uppercase">Title<span class="text-red-700">*</span></label>
              <input type="text" value="{{ old('title') }}"
                class="w-full p-2 border border-gray-400 form-control border-opacity-6" name="title" id="title"  placeholder="">
                @error('title')
                    <p class="text-xs text-red-500 text-bold">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="" class="block mb-2 text-xs font-bold text-gray-700 uppercase">Excerpt<span class="text-red-700">*</span></label>
                <input type="text" value="{{ old('excerpt') }}"
                  class="w-full p-2 border border-gray-400 form-control border-opacity-6" name="excerpt" id="excerpt"  placeholder="">
                  @error('excerpt')
                  <p class="text-xs text-red-500 text-bold">{{ $message }}</p>
              @enderror
              </div>
              <div class="mb-6">
                <label for="" class="block mb-2 text-xs font-bold text-gray-700 uppercase">Thumbnail<span class="text-red-700">*</span></label>
                <input type="file" value="{{ old('thumbnail') }}"
                  class="w-full p-2 border border-gray-400 form-control border-opacity-6" name="thumbnail" id="thumbnail"  placeholder="">
                  @error('thumbnail')
                  <p class="text-xs text-red-500 text-bold">{{ $message }}</p>
              @enderror
              </div>

              <div class="mb-6">
                <label for="" class="block mb-2 text-xs font-bold text-gray-700 uppercase">Category<span class="text-red-700">*</span></label>
                <select name="category_id" id="" class="form-control">
                    @foreach (App\Models\Category::all() as $category)
                    <option value="{{ $category -> id  }}">{{ $category -> name }}</option>
                    @endforeach

                </select>

                @error('category_id')
                <p class="text-xs text-red-500 text-bold">{{ $message }}</p>
            @enderror
              </div>

              <textarea name="body" class="w-full p-2 focus:none form-control" placeholder="let us know your valuable comment"></textarea>
              @error('body')
              <p class="text-xs text-red-500 text-bold">{{ $message }}</p>
          @enderror
              <hr>
              <br>

              <button class="px-5 py-2 text-sm font-bold text-white bg-blue-500 rounded-xl">Post</button>


        </form>
        </div>

    </main>
</x-layouts>
