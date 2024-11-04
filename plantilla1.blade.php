<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100 h-screen m-0 p-0">

    <div class="bg-blue-500 text-white text-center p-6 font-bold text-2xl">
        Mi Imagen
    </div>

    
    <div class="flex h-full bg-white shadow-lg border border-gray-200">

        
        <div class="bg-gray-800 w-64 p-6">
            <ul class="space-y-4">
                <li><a href="/miproyecto" class="block text-white text-lg font-bold hover:text-blue-400">INICIO</a></li>
                <li><a href="/misperritos" class="block text-white text-lg font-bold hover:text-blue-400">Perritos</a></li>
                <li><a href="/misgatitos" class="block text-white text-lg font-bold hover:text-blue-400">Gatitos</a></li>
                <li><a href="/misconejos" class="block text-white text-lg font-bold hover:text-blue-400">Conejos</a></li>
                <li><a href="/miscanguros" class="block text-white text-lg font-bold hover:text-blue-400">Canguros</a></li>
                <li><a href="/misdinosaurios" class="block text-white text-lg font-bold hover:text-blue-400">Dinosaurios</a></li>
            </ul>
        </div>

        
        <div class="flex-grow p-6">

            @yield('content')
            
        </div>
    </div>

</body>
</html>
