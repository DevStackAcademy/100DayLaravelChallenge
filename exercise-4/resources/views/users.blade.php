<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto p-4">
            <p class="mb-4 flex">
                <a href="{{ route('users.excel') }}" class="bg-orange-500 hover:bg-orange-600 text-white font-bold text-xs px-4 py-2 shadow mr-4">Excel</a>
                <a href="{{ route('users.csv') }}" class="bg-gray-700 hover:bg-gray-600 text-white font-bold text-xs px-4 py-2 shadow">CSV</a>
                <a href="{{ route('users.pdf') }}" class="bg-gray-700 hover:bg-gray-600 text-white font-bold text-xs px-4 py-2 shadow">PDF</a>
                <a href="{{ route('users.html') }}" class="bg-gray-700 hover:bg-gray-600 text-white font-bold text-xs px-4 py-2 shadow">HTML</a>
            </p>

            <table class="shadow">
                <tr class="border-b border-gray-200 bg-gray-50 text-xs text-gray-500">
                    <th class="px-6 py-3 font-medium"># ID</th>
                    <th class="px-6 py-3 font-medium">NOMBRE</th>
                    <th class="px-6 py-3 font-medium">EMAIL</th>
                </tr>
                <tbody class="bg-white">
                    @foreach($users as $user)
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-3 text-gray-900">{{ $user->id }}</td>
                        <td class="px-6 py-3 text-gray-900 flex">
                            <svg class="w-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z"></path>
                            </svg>
                            {{ $user->name }}
                        </td>
                        <td class="px-6 py-3 text-gray-500">{{ $user->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $users->links() }}
        </div>  
    </body>
</html>