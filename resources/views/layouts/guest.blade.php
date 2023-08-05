<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure container is at least the height of the viewport */
            margin: 0 auto;
        }

        .container > .third {
            /*border: 1px solid black;*/
            padding: 1rem 0;
            flex: 1; /* Distribute equal space among children */
        }

        header {
            align-items: start;
            display: flex;
            font-size: 3rem;
        }

        div.third {
            align-items: start;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            font-family: 'Inter', sans-serif;
        }

        footer {
            align-items: end;
            display: flex;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <header class="third">
        {{ $header }}
    </header>
    <div class="third">
        {{ $slot }}
    </div>
    <footer class="third">
        {{ $footer }}
    </footer>
</div>
</body>
</html>
