<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- @foreach ($information as $inf)
                       <ul>
                        <li>{{$inf->title}}</li>
                        <li>{{$inf->director}}</li>
                        <li>{{$inf->genre}}</li>
                        <li>{{$inf->release_yeah}}</li>
                        
                       </ul>

                       
                    
                    @endforeach --}}

                    <table class="w-full text-center divide-y divide-gray-200">
                        <thead class="bg-gray-200  ">
                            <tr class="bg-sky-400 ">
                                <th class="px-6 py-3 text-left text-center text-xs font-medium text-white text-lg uppercase tracking-wider" scope="col">Title</th>

                                <th class="px-6 py-3 text-left text-xs text-center font-medium text-white text-lg uppercase tracking-wider" scope="col">Director</th>

                                <th class="px-6 py-3 text-left text-xs text-center font-medium text-white text-lg uppercase tracking-wider" scope="col">genre</th>

                                <th class="px-6 py-3 text-left text-xs text-center font-medium text-white text-lg uppercase tracking-wider" scope="col">release_yeah</th>

                                <th class="px-6 py-3 text-left text-xs text-center font-medium text-white text-lg uppercase tracking-wider" scope="col" scope="col">

                                    <a class="bg-blue-500 p-1 rounded-lg border-white border-2" href="{{route('filmes.create')}}">Create Movie</a>
                                
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 ">
                            @foreach ($information as $inf)
                                <tr class="bg-sky-300">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                        {{ $inf->title }}
                                    </td>

                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                        {{ $inf->director }}
                                    </td>
                                    
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                        {{ $inf->genre}}
                                    </td>
                                    
                                    <td class="px-6 py-4 text-sm font-medium text-center text-gray-900 whitespace-nowrap">
                                        {{ $inf->release_yeah}}
                                    </td>
                                    
                                    
                                    <td class="flex px-6 py-4 text-sm font-medium items-center text-gray-900 whitespace-nowrap">

                                        <a class="bg-green-500 hover:bg-green-700  text-white font-bold mx-2 py-1 px-4 rounded"
                                        href="{{ route('filmes.edit', [$inf->id]) }}">Edit</a>

                                        <form action="{{ route('filmes.destroy', $inf->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Delete</button>
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
</x-app-layout>
