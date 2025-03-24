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
                  <p><small><strong><a href="/dashboard">&laquo; Back</a></strong></small></p>    

                    <!-- Blog Article -->
                    <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
                      <div class="max-w-2xl">
                        <!-- Avatar Media -->
                        <div class="flex justify-between items-center mb-6">
                          <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                            <div class="shrink-0">
                              <img class="size-12 rounded-full" src="https://images.unsplash.com/photo-1669837401587-f9a4cfe3126e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                            </div>

                            <div class="grow">
                              <div class="flex justify-between items-center gap-x-2">
                                <div>
                                  <!-- Tooltip -->
                                  <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
                                    <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                                      <span class="font-semibold text-black">
                                        {{Auth::user()->name}}
                                      </span>
                                    </div>
                                  </div>
                                  <!-- End Tooltip -->

                                  <ul class="text-xs text-dark-900">
                                    <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 text-blue-800 dark:text-sky-600">
                                      {{$post->updated_at}}
                                    </li>
                                  </ul>
                                </div>

                                <!-- Button Group -->

                                  <div>
                                    <!-- Edit Button -->
                                    <a class="ms-3 mx-2 p-2 inline-flex text-green-600 hover:text-green-800 transition" href="/single-post/{{$post->post_slug}}/edit">
                                      <div class="hs-tooltip [--trigger:hover] inline-block">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                            <path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                            <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                          </svg>
                                          <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400" role="tooltip">
                                            Edit
                                          </span>
                                      </div>
                                    </a>      

                                    <!-- Delete Button -->
                                    <div class="hs-tooltip [--trigger:hover] inline-block relative">
                                        <form class="delete-post-form d-inline" action="/single-post/{{$post->post_slug}}/delete" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 mx-2 inline-flex text-red-600 hover:text-red-800 transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                                    <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400" role="tooltip">
                                                Delete
                                            </span>
                                        </form>
                                    </div>
                                  </div>
                                <!-- End Button Group -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Avatar Media -->

                        <!-- Content -->
                        <div class="space-y-5 md:space-y-8">
                          <div class="space-y-3">
                            <h2 class="text-2xl font-bold md:text-3xl text-black">{{$post->title}}</h2>

                            <p class="text-lg text-black">{{$post->content}}</p>
                          </div>

                          <p class="text-lg text-black">We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.</p>
                        </div>
                        <!-- End Content -->
                      </div>
                    </div>
                    <!-- End Blog Article -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
