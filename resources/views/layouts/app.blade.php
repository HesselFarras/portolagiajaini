<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('portfolio.meta.title'))</title>
    <meta name="description" content="@yield('description', config('portfolio.meta.description'))">
    <meta name="author" content="{{ config('portfolio.profile.name') }}">

    <meta property="og:title" content="@yield('title', config('portfolio.meta.title'))">
    <meta property="og:description" content="@yield('description', config('portfolio.meta.description'))">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset(config('portfolio.profile.hero')) }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', config('portfolio.meta.title'))">
    <meta name="twitter:description" content="@yield('description', config('portfolio.meta.description'))">
    <meta name="twitter:image" content="{{ asset(config('portfolio.profile.hero')) }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
    @if (app()->isProduction())
        @php
            $manifestPath = public_path('build/manifest.json');
            $manifest = file_exists($manifestPath) ? json_decode(file_get_contents($manifestPath), true) : [];
        @endphp

        @if(!empty($manifest))
            <link rel="stylesheet" href="{{ asset('build/' . $manifest['resources/css/app.css']['file']) }}">
            <script type="module" src="{{ asset('build/' . $manifest['resources/js/app.js']['file']) }}"></script>
        @endif
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-background font-sans text-foreground antialiased">
    @yield('content')
</body>
</html>
