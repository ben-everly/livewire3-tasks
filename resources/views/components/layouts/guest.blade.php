<html class="h-full"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <title>Livewire</title>
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
    </head>

    <body class="h-full antialiased">
        {{ $slot }}
    </body>
</html>
