<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Devstagram - @yield('titulo')</title>
        {{-- Tailwind CSS --}}
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-slate-300">
        <header class="bg-slate-800 shadow-2xl p-5 px-10 md:flex md:justify-between md:items-center">
            <h1 class="text-3xl text-white">DevStagram</h1>

            <nav class="flex gap-5 text-white text-base">
                <a class="hover:text-orange-500" href="/">Home</a>
                <a class="hover:text-orange-500" href="/register">Register</a>
            </nav>
        </header>
    </body>
</html>
