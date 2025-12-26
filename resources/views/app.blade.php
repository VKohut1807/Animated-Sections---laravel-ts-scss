<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Robots" content="noindex,nofollow" />

    <title>AnimaSections</title>

    <!-- Fonts -->
    @yield('preloads')
    <link rel="preload" href="/fonts/woff2/Vollkorn-Italic.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/woff2/Vollkorn-Regular.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Styles -->
    @vite(['resources/scss/global/index.scss'])
    @yield('styles')

    @yield('script')
</head>

<body>
    @vite('resources/ts/partials/breadcrumbs.ts')

    @if (!request()->is('section-2'))
        @include('components.navigationDrawers')
        @vite('resources/ts/components/navigationDrawers.ts')
    @endif

    @yield('content')
</body>

</html>
