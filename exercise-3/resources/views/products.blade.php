<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="container mx-auto px-4 mb-4">
            <p class="flex gap-2 my-4">
                <a href="{{ route('products.export.collection') }}" class="bg-slate-900 hover:bg-slate-700 text-white font-semibold rounded p-2">Exportar (Collection)</a>
                <a href="{{ route('products.export.view') }}" class="bg-slate-900 hover:bg-slate-700 text-white font-semibold rounded p-2">Exportar (View)</a>
            </p>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Resumen</th>
                    <th>Precio</th>
                    <th>Existencia</th>
                </tr>

                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->excerpt }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td> 
                </tr>
                @endforeach
            </table>

            {{ $products->links() }}
        </div>        
    </body>
</html>
