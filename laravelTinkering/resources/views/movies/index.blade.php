@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <style>
        /* Estils generals */
        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            font-size: 3rem;
            color: #b71c1c; /* Vermell Nadal */
            text-shadow: 2px 2px 3px #880e4f;
            margin-bottom: 20px;
        }

        /* Contenidor principal */
        .content {
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            border: 3px solid #c62828; /* Vermell intens */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fbe9e7; /* Taronja suau */
            border: 2px solid #e53935; /* Vermell més intens */
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        li a {
            color: #1b5e20; /* Verd Nadal */
            font-weight: bold;
            text-decoration: none;
        }

        li a:hover {
            color: #43a047; /* Verd més clar */
        }

        /* Botons */
        .btn {
            display: inline-block;
            padding: 8px 12px;
            background-color: #2e7d32; /* Verd fosc */
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
        }

        .btn:hover {
            background-color: #1b5e20;
            transform: scale(1.05);
        }

        button {
            background-color: #d84315; /* Taronja Nadal */
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #bf360c;
        }

        /* Peu de pàgina o decoració */
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 1rem;
            color: #b71c1c;
        }
    </style>

    <div class="content">
        <h1>🎄 Movies 🎅</h1>
        <a href="{{ route('movies.create') }}" class="btn">➕ Add Movie</a>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <a href="{{ route('movies.show', $movie->id) }}">🎥 {{ $movie->title }}</a>
                    <div>
                        <a href="{{ route('movies.edit', $movie->id) }}" class="btn">✏️ Edit</a>
                        <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">🗑️ Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="footer">
            🎄 Bon Nadal i Gaudeix de les Pel·lícules! 🎬
        </div>
    </div>
@endsection
