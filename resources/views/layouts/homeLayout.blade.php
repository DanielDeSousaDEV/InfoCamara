<!DOCTYPE html>
<html lang="pt-BR" class='scroll-smooth'>
<head class='dark'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'InfoCâmara')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class='bg-three'>

    <x-navbar/>

    @yield('content')

    @stack('scripts')
    <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>
</html>