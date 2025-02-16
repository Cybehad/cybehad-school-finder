<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $heading ?? env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <wireui:scripts />
</head>
<body class="antialiased font-sans">
<div class="bg-gray-50 text-black/50 dark:bg-gray-900 dark:text-white/50">
    <div class="relative min-h-screen items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <header class="sticky top-0">
                @if (Route::has('login'))
                    <livewire:welcome.navigation />
                @endif
            </header>
            <section class="pt-4 text-center">
                <h1 class="text-3xl text-bold">Find Your Favorite School</h1>
                <form action="/search" method="GET" class="mt-6">
                    <input type="text" name="q" placeholder="Search..." class="w-full max-w-xl px-8 py-3 rounded-xl bg-white/5 border-gray"/>
                </form>
            </section>
            <main class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg mt-8 p-4">
                {{ $slot }}
            </main>
            <x-footer />
        </div>
    </div>
</div>
</body>
</html>
