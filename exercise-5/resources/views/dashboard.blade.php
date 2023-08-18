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
                    
                    <table class="mb-4">
                        @foreach($posts as $post)
                        <tr>
                            <td class="px-2 py-1">{{ $post->id }}</td>
                            <td class="px-2 py-1">
                                <strong>{{ $post->title }}</strong> 
                                {{-- <span class="text-xs">({{ $post->user->name }})</span> --}}
                                <br>
                                {{ $post->summary }}
                            </td>
                            <td class="px-2 py-1">
                                {{-- @can('delete', $post) --}}
                                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-600 text-white p-2 text-xs rounded">Eliminar</button>
                                </form>
                                {{-- @endcan --}}
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    {{ $posts->links() }} 

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
