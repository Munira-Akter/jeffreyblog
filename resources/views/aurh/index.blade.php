<x-layouts>

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <h1 class="text-center text-bold text-lg my-10">Register Now</h1>
        <form action="/register" method="post" class="bg-gray-100 p-10 max-w-2xl  mx-auto">

            <div class="mb-6">
              <label for="" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name<span class="text-red-700">*</span></label>
              <input type="text"
                class="form-control p-2  border border-gray-400 w-full border-opacity-.6" name="name" id="name"  placeholder="">
            </div>



        </form>
    </main>

</x-layouts>
