<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Viewing: Single Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <!-- Card Section -->
                  <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                    <form action="/single-post/{{ $post->post_slug }}" method="POST">
                      @csrf
                      @method('PUT')  
                      <!-- Card -->
                      <div class="bg-white rounded-xl shadow-xs dark:bg-neutral-900 py-3">
                        <div class="pt-0 p-4 sm:pt-0 sm:p-7">
                          <!-- Grid -->
                          <div class="space-y-4 sm:space-y-6">
                            <div class="space-y-2">
                              <label for="af-submit-project-url" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Title
                              </label>

                              <input id="af-submit-project-url" name="title" type="text" value="{{old('title', $post->title)}}" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Post title...">
                            </div>
                            <div class="space-y-2">
                              <label for="af-submit-app-description" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Content
                              </label>

                              <textarea id="af-submit-app-description" name="content" class="py-1.5 sm:py-2 px-3 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6" placeholder="Post Content...">{{old('content', $post->content)}}</textarea>
                            </div>
                          </div>
                          <!-- End Grid -->

                          <div class="mt-5 flex justify-center gap-x-2">
                          <button class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Save Changes
                          </button>
                          </div>
                        </div>
                      </div>
                      <!-- End Card -->
                    </form>
                  </div>
                  <!-- End Card Section -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
