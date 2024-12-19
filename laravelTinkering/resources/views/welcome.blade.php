<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaravelTinkering</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Estil general */
            body {
                font-family: 'Figtree', sans-serif;
                background-color: #f8f9fa; /* Blanc suau */
                color: #333;
                margin: 0;
                padding: 0;
            }

            /* Contenidor principal */
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 20px;
                background: #ffffff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                border-radius: 10px;
            }

            /* Encapçalament */
            .header {
                text-align: center;
                background: #b71c1c; /* Vermell fosc nadalenc */
                color: #fff;
                padding: 20px;
                border-radius: 10px 10px 0 0;
            }

            .header h1 {
                font-size: 3rem;
                margin: 0;
                text-shadow: 2px 2px 5px #3e2723;
            }

            nav a {
                color: #ffccbc;
                margin: 0 10px;
                text-decoration: none;
                font-weight: bold;
            }

            nav a:hover {
                color: #ffe0b2;
                text-decoration: underline;
            }

            /* Contingut principal */
            .main-content {
                text-align: center;
                padding: 50px 20px;
                background-image: url('https://www.transparenttextures.com/patterns/snow.png'); /* Efecte neu */
                background-color: #f5f5f5;
                border: 2px solid #d84315; /* Taronja nadalenc */
                border-radius: 0 0 10px 10px;
            }

            .main-content h1 {
                font-size: 2.5rem;
                margin-bottom: 15px;
                color: #b71c1c;
            }

            .main-content p {
                font-size: 1.25rem;
                color: #333;
                margin-bottom: 30px;
            }

            /* Botons estil nadalenc */
            .btn {
                display: inline-block;
                padding: 10px 25px;
                margin: 10px;
                font-size: 1.1rem;
                font-weight: bold;
                color: #fff;
                background-color: #2e7d32; /* Verd nadalenc */
                border: none;
                border-radius: 5px;
                text-decoration: none;
                transition: all 0.3s ease;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            }

            .btn:hover {
                background-color: #1b5e20;
                transform: scale(1.05);
            }

            /* Peu de pàgina */
            .footer {
                text-align: center;
                padding: 15px;
                background: #b71c1c;
                color: #fff;
                border-top: 2px solid #880e4f;
            }

            .footer p {
                margin: 0;
                font-size: 1rem;
            }

            /* Decoracions especials */
            .snowflake {
                position: absolute;
                width: 10px;
                height: 10px;
                background: white;
                border-radius: 50%;
                opacity: 0.8;
                animation: fall 8s linear infinite;
            }

            @keyframes fall {
                0% {
                    transform: translateY(-10px);
                }
                100% {
                    transform: translateY(100vh);
                }
            }
        </style>
    @endif
</head>
<body>
<div class="container">
    <header class="header">
        <h1>LaravelTinkering</h1>
        <nav>
            <a href="/">Inici</a>
            <a href="/movies">Pel·lícules</a>
            <a href="/customs">Personalitzats</a>
        </nav>
    </header>

    <main class="main-content">
        <h1>Benvingut a LaravelTinkering</h1>
        <p>Aquesta és la pàgina de destinació del projecte LaravelTinkering. Explora les característiques i funcionalitats de la nostra aplicació web.</p>
        <a href="/movies" class="btn">Explorar Pel·lícules</a>
        <a href="/alcohols" class="btn">Explorar Alcohols</a>
    </main>

    <footer class="footer">
        <p>Creat per David Groza. Tots els drets reservats.</p>
    </footer>
</div>
</body>
</html>
