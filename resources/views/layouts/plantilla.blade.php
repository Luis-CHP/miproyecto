
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0; /* Elimina el margen del cuerpo */
            padding: 0; /* Elimina el relleno del cuerpo */
            height: 100vh; /* Asegura que el cuerpo ocupe toda la altura */
        }
        .menu-container {
            display: flex;
            flex-direction: row;
            background-color: #ffffff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 100%; /* para que el contenedor ocupe toda la altura disponible */
        }
        .menu-sidebar {
            background-color: #343a40;
            width: 250px;
            padding: 20px;
        }
        .menu-sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .menu-sidebar ul li {
            margin: 15px 0;
        }
        .menu-sidebar ul li a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            font-weight: bold;
            display: block;
        }
        .menu-sidebar ul li a:hover {
            color: #007bff;
        }
        .menu-content {
            flex-grow: 1;
            padding: 20px;
            background-color: #ffffff;
        }
        .menu-content h1 {
            font-size: 24px;
            color: #333;
        }
        .menu-header img {
            width: 100%;
            height: auto;
        }
        .menu-header {
            padding: 20px;
            background-color: #007bff;
            color: white;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        iframe {
            margin-top: 20px;
            width: 100%;
            height: 700px;
        }
    </style>
</head>
<body>

    <!-- Cabecera con imagen -->
    <div class="menu-header">
        Mi Imagen
    </div>

    <!-- Contenedor del menú -->
    <div class="menu-container">
        <!-- Barra lateral del menú -->
        <div class="menu-sidebar">
            <ul>
                <li><a href="/miprimeravista">INICIO</a></li>
                <li><a href="/perritos">Perritos</a></li>
                <li><a href="/gatitos">Gatitos</a></li>
                <li><a href="/conejos">Conejos</a></li>
                <li><a href="/canguros">Canguros</a></li>
                <li><a href="/dinosaurios">Dinosaurios</a></li>
            </ul>
        </div>

        <!-- Contenido principal -->
        <div class="menu-content">
            @yield('content')
            
            <iframe src="https://www.youtube.com/embed/pUxnJm-xMc4?si=qmwrGYzRWdzrJXBW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>

</body>
</html>
