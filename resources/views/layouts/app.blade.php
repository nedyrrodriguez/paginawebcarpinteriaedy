<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>La Carpintería de Edy</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-950 text-white min-h-screen flex flex-col">


<header class="p-4 bg-blue-800 text-white text-center font-bold text-xl">
    La Carpintería, las curiosidades de Edy
</header>

<main class="flex-grow p-4">
    <h1 class="text-3xl font-bold mb-6 text-center">
        @yield('cabecera', 'La Carpintería, las curiosidades de Edy')
    </h1>

    @yield('content')
</main>


<footer class="p-4 bg-blue-800 text-center text-white">
    &copy; 2025 La Carpintería Edy
</footer>

</body>
</html>


