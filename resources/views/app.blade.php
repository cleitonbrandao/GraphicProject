<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'GraphicPorject') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased dark:bg-dots-lighter">
        @inertia
    </body>
</html>
<style>
    .bg-dots-darker {
        background-color: linear-gradient(to bottom right, #5e8ab5, #a0b6cc ); /* Defina as cores para criar o degradê */
    }
    @media (prefers-color-scheme: dark) {
        .dark\:bg-dots-lighter {
            background-color: linear-gradient(to bottom right, #01162b, #344658 ); /* Defina as cores para criar o degradê */
        }
    }
</style>
