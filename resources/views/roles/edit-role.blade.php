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
                <p><small><strong><a href="/all-roles">&laquo; Back</a></strong></small></p> 

                    <!-- Edit Form -->
                    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                      <div class="mx-auto max-w-2xl">
                        <div class="text-center">
                          <h2 class="text-xl text-black font-bold sm:text-3xl">
                            Update Role
                          </h2>
                        </div>

                        <!-- Edit -->
                        <div class="mt-5 p-4 relative z-10 bg-white border border-gray-200 rounded-xl sm:mt-10 md:p-10 dark:bg-neutral-900 dark:border-neutral-700">
                          <form action="/single-role/{{$role->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4 sm:mb-8">
                              <label for="hs-feedback-post-comment-name-1" class="block mb-2 text-sm font-medium dark:text-white">Role Name</label>
                              <input type="text" name="name" value="{{old('name', $role->name)}}" id="hs-feedback-post-comment-name-1" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm text-black" placeholder="Role name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-white">Select Permissions:</label>
                                @foreach ($permissions as $permission)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="permissions[]" 
                                              value="{{ $permission->id }}" id="permission{{ $permission->id }}"
                                              {{ in_array($permission->id, $assignedPermissions) ? 'checked' : '' }}> 
                                        <label class="form-check-label text-white" for="permission{{ $permission->id }}">
                                            {{ $permission->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>


                            <div class="mt-6 grid">
                              <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Save changes</button>
                            </div>
                          </form>
                        </div>
                        <!-- End Card -->
                      </div>
                    </div>
                    <!-- End Comment Form -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>