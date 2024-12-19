<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Estils generals */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Figtree', sans-serif;
            background-color: #f9f9f9;
        }

        /* Contenidor */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Header */
        .header {
            background-color: #b71c1c; /* Vermell Nadal */
            color: #fff;
            padding: 15px;
            text-align: center;
            border-radius: 10px 10px 0 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .header h1 {
            margin: 0;
            font-size: 2.5rem;
            text-shadow: 2px 2px 3px #880e4f;
        }

        /* Navbar */
        nav {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        nav a {
            color: #ffccbc; /* Taronja suau */
            text-decoration: none;
            font-weight: bold;
            padding: 10px 15px;
            background-color: #2e7d32; /* Verd Nadal */
            border: 2px solid #1b5e20; /* Vora verda fosca */
            border-radius: 5px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        nav a:hover {
            background-color: #1b5e20; /* Verd més fosc */
            color: #fff;
            transform: scale(1.05);
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.3);
        }

        /* Decoració especial: efecte neu */
        .header::after {
            content: '❄️ ❄️ ❄️';
            position: absolute;
            top: 5px;
            right: 10px;
            font-size: 1.2rem;
            color: #ffffff;
            opacity: 0.8;
        }

        .header::before {
            content: '🎄';
            position: absolute;
            top: 5px;
            left: 10px;
            font-size: 1.5rem;
        }


    </style>

</head>
<body>
<div class="container">
    <header class="header">
        <h1>LaravelTinkering</h1>
        <nav>
            <a href="/">Inici</a>
            <a href="/movies">Pel·lícules</a>
            <a href="/alcohols">Alcohols</a>
        </nav>
    </header>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="footer">
        <p>Creat per David Groza</p>
    </footer>
</div>
</body>
</html>
