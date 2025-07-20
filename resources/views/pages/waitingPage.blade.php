<!DOCTYPE html>
<html lang="pt-BR" class='scroll-smooth'>
<head class='dark'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'InfoCâmara')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/waiting.js'])
</head>
<body class='bg-three h-screen'>

    <div class='container mx-auto px-4'>
        <div class='w-full max-w-md md:max-w-2xl mx-auto text-center absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 p-4 sm:p-6 md:p-8 rounded-lg bg-gray-800 space-y-4 md:space-y-8'>
            <h1 id='porcentTitle' class='text-xl md:text-2xl'>
                O Banco de dados está sendo populado com os dados da Api
            </h1>

            <p id='porcentParagraph' class="text-sm sm:text-base">
                Isto pode levar alguns minutos
            </p>

            <div id='porcent' class='h-10 w-full rounded-lg overflow-hidden bg-primary relative'>
                <div id='porcentFill' class='bg-secondary h-full w-0 transition-all'></div>
                <span id='porcentText' class='absolute z-10 text-base sm:text-lg md:text-xl font-semibold top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-gray-800/90'>
                    0%
                </span>
            </div>

            <button id='homeButton' onclick='window.open("/")' type="button"
                class="py-2 px-4 sm:px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-300 focus:z-10 focus:ring-4 focus:ring-gray-100 hidden">
                Voltar para página inicial
            </button>
        </div>
    </div>

</body>
</html>