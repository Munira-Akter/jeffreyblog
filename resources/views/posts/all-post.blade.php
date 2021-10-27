<x-layouts>

            <main class="flex max-w-6xl mx-auto mt-6 space-y-6 lg:mt-20">
            <x-menu />
            <div class="flex-1">

                <h1 class="my-10 text-lg text-center text-bold">All Post</h1>
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-4">
                      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                          <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                              <tr>
                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                  Title
                                </th>

                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                  Status
                                </th>

                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                   Edit  Action
                                  </th>

                                  <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                   Delete Action
                                  </th>


                              </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">

                                @forelse ($posts as $post)
                                <tr>


                                    <td class="px-6 py-4 whitespace-nowrap">
                                      <div class="flex items-center">
                                        <div class="ml-4">
                                          <div class="text-sm font-medium text-gray-900">
                                           {{ $post -> title }}
                                          </div>
                                        </div>
                                      </div>
                                    </td>




                                    <td class="px-6 py-4 whitespace-nowrap">
                                      <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                        Published
                                      </span>
                                    </td>


                                    <td class="px-6 py-4 text-sm font-medium text-center whitespace-nowrap">
                                      <a href="/admin/{{ $post -> id }}/edit" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>

                                    <td class="px-6 py-4 text-sm font-medium text-center whitespace-nowrap">
                                     <a href="/admin/delete/{{ $post -> id }}" class="text-indigo-600 hover:text-indigo-900">Delete</a>

                                      </td>
                                  </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">No Post published Yet</td>
                                    </tr>
                                @endforelse


                              <!-- More people... -->
                            </tbody>
                          </table>

                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  {{ $posts -> links() }}
                </div>

            </main>
</x-layouts>
