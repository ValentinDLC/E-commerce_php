<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DIMA DIMA — Un seul peuple, un seul cœur, une seule patrie</title>
    <meta name="description" content="DIMA DIMA — Maillots streetwear célébrant les régions du Maroc.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-ink">

    @include('partials.header-c')

    <main id="top">
        @yield('content')
    </main>

    @include('partials.footer-c')
    @include('partials.cart-drawer')

</body>
</html>
