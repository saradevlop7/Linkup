<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LinkUp</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-slate-100">

<div class="min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md">

        <!-- Logo -->
        <div class="text-center mb-8">
            <a href="/">
                <h1 class="text-5xl font-extrabold text-blue-700">
                    LinkUp
                </h1>
            </a>

            <p class="text-gray-600 mt-3">
                Votre réseau professionnel
            </p>
        </div>

        <!-- Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-200">

            {{ $slot }}

        </div>

        <p class="text-center text-sm text-gray-500 mt-6">
            © {{ date('Y') }} LinkUp. Tous droits réservés.
        </p>

    </div>

</div>

</body>
</html>
