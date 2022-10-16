<!doctype html>
<html lang="en">

    <head>
        {{-- Required meta tags --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('img/favicon.png') }}" rel="icon">

        @include('components.style')

        <title>@yield('title') - BikeSekali</title>
    </head>

    <body>

        @include('components.header')

        @if ($active <> 'home')
            @include('components.breadcrumbs')
        @endif

        {{-- tambahkan hero jika di home --}}
        @if ($active === 'home')
            @include('components.hero')
        @endif

        @yield('container')

        {{-- tambahkan clients jika di home --}}
        @if ($active==='home')
            @include('components.client')
        @endif
        
        @include('components.footer')

        @include('components.script')

    </body>

</html>