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
                    {{-- {{ __("You're logged in!") }} --}}
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-center border-b-2 boredr-gray-800 py-2">Name</th>
                                <th class="text-center border-b-2 boredr-gray-800 py-2">Email</th>
                                <th class="text-center border-b-2 boredr-gray-800 py-2">Role</th>
                                <th class="text-center border-b-2 boredr-gray-800 py-2">Actions</th>
                            </tr>
                        </thead>
                        @foreach($Users as $User)
                        @if ($User->role == 'user')
                            <tr>
                                <td class="text-center py-2">{{$User->name}}</td>
                                <td class="text-center py-2">{{$User->email}}</td>
                                <form class="w-full max-w-sm" method="POST" action="{{url('users/'.$User->id)}}">
                                    <input type="hidden" name="_method" value="PUT">
                                    {{-- @method("PUT") --}}
                                    {{ csrf_field() }}
                                <td class="text-center py-2">{{$User->role}}</td>
                                    <td class="text-center py-2">
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 rounded">Add Permission</button>
                                    </td>
                                </form>
                            </tr>
                        @elseif ($User->role == 'admin')
                            <tr>
                                <td class="text-center py-2">{{$User->name}}</td>
                                <td class="text-center py-2">{{$User->email}}</td>
                                <form class="w-full max-w-sm" method="POST" action="{{url('users/'.$User->id)}}">
                                    <td class="text-center py-2 font-bold">{{$User->role}}</td>
                                    <input type="hidden" name="_method" value="PUT">
                                    {{-- @method("PUT") --}}
                                    {{ csrf_field() }}
                                <td class="text-center py-2">
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold px-4 rounded">Remove Permission</button>
                                </td>
                                </form>
                            </tr>
                            @endif
                            
                            
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
