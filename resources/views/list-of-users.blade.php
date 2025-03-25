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
                <p><small><strong><a href="/create-rnp">&laquo; Back</a></strong></small></p> 

                <div class="container mx-auto px-4 py-6">
                  <h2 class="text-2xl font-bold text-gray-800 mb-6">Assign Roles to Users</h2>

                  <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-md">
                    <table class="min-w-full divide-y divide-gray-200">
                      <thead class="bg-gray-50">
                        <tr>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Current Role</th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Assign New Role</th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($users as $user)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                              <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            @if($user->roles->isNotEmpty())
                              <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $user->roles->pluck('name')->implode(', ') }}
                              </span>
                            @else
                              <span class="text-sm text-gray-500 italic">No role assigned</span>
                            @endif
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <form action="/list-of-users/{{$user->id}}/assign-role" method="POST" class="space-y-2">
                              @csrf
                              <select name="role" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                @foreach ($roles as $role)
                                  <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                              </select>
                              <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-150">
                                Assign
                              </button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
