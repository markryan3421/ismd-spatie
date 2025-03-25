<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Card Blog -->
                    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                      <!-- Grid -->
                      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Card -->
                        <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-2xs rounded-xl hover:shadow-lg hover:-translate-y-1 transition-all duration-300 dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                          <div class="h-52 flex flex-col justify-center items-center bg-blue-600 rounded-t-xl group-hover:bg-blue-700 transition-colors duration-300">
                            <svg class="size-28" width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <!-- SVG Paths -->
                            </svg>
                          </div>
                          <div class="p-4 md:p-6">
                            <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                              Role
                            </span>
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                              Add new role
                            </h3>
                            
                          </div>
                          <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                            <a href="/add-role" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                              Add Role
                            </a>
                            <a href="/all-roles" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                              View All Role
                            </a>
                          </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-2xs rounded-xl hover:shadow-lg hover:-translate-y-1 transition-all duration-300 dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                          <div class="h-52 flex flex-col justify-center items-center bg-cyan-900 rounded-t-xl group-hover:bg-cyan-600 transition-colors duration-300">
                            <svg class="size-28" width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <!-- SVG Paths -->
                            </svg>
                          </div>
                          <div class="p-4 md:p-6">
                            <span class="block mb-1 text-xs font-semibold uppercase text-cyan-900 dark:text-cyan-600">
                              Permission
                            </span>
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                              Add Permission
                            </h3>
                            
                          </div>
                          <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                            <a href="/create-permission" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                              Add Permission
                            </a>
                            <a href="/all-permissions" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                              View All Permissions
                            </a>
                          </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-2xs rounded-xl hover:shadow-lg hover:-translate-y-1 transition-all duration-300 dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                          <div class="h-52 flex flex-col justify-center items-center bg-blue-900 rounded-t-xl group-hover:bg-blue-700 transition-colors duration-300">
                            <svg class="size-28" width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <!-- SVG Paths -->
                            </svg>
                          </div>
                          <div class="p-4 md:p-6">
                            <span class="block mb-1 text-xs font-semibold uppercase text-blue-900">
                              Assign Role
                            </span>
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                              Assign a role to your users
                            </h3>
                            
                          </div>
                          <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                            <a href="/list-of-users" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                              Assign role
                            </a>
                            
                          </div>
                        </div>
                        <!-- End Card -->
                      </div>
                      <!-- End Grid -->
                    </div>
                    <!-- End Card Blog -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>