<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end">
                <a href="/plate/add" class="bg-indigo-400 rounded text-white py-2 px-3 hover:bg-indigo-600 mb-2">Add Plate</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-center border-b-2 boredr-gray-800 py-2">Name</th>
                                <th class="text-center border-b-2 boredr-gray-800 py-2">Description</th>
                                <th class="text-center border-b-2 boredr-gray-800 py-2">Category</th>
                                <th class="text-center border-b-2 boredr-gray-800 py-2">Actions</th>
                            </tr>
                        </thead>
                        @foreach($Plates as $Plate)
                            <tr>
                                <td class="text-center py-2">{{$Plate->plateName}}</td>
                                <td class="text-center py-2">{{$Plate->description}}</td>
                                <td class="text-center py-2">{{$Plate->category}}</td>
                                <td class="text-center py-2">
                                    <a href="{{url('plates/'.$Plate->id.'/edit')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 rounded">Edit</a>
                                    {{-- Form delete --}}
                                    <form action="{{url('plates/'.$Plate->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE')}}
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold px-4 rounded">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
