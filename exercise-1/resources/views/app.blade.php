<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </head>
    <body>
        <!-- Header -->
        <header class="p-3 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center ">
                    <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center">
                        @foreach($pages as $page)
                        <li>
                            <a 
                                href="{{ route('post', $page->slug) }}"
                                class="
                                    nav-link px-2 
                                    {{ 
                                        request()->is($page->slug) == $page->slug 
                                            ? 'text-secondary' 
                                            : 'text-white'
                                    }}
                                "
                            >{{ $page->title }}</a>
                        </li>
                        @endforeach            
                    </ul>

                    <a href="{{ route('blog') }}" class="btn btn-warning text-end">Blog</a>
                </div>
            </div>
        </header>

        @yield('content')
    </body>
</html>
