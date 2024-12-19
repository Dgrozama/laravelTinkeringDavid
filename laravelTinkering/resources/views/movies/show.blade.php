@extends('layouts.app')

@section('title', 'Movie Details')

@section('content')
    <style>
        /* Contenidor principal */
        .content {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fffdf6; /* Blanc crema suau */
            border: 3px solid #b71c1c; /* Vora vermella nadalenca */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Títol de la pel·lícula */
        h1 {
            color: #b71c1c; /* Vermell Nadal */
            font-size: 2.5rem;
            text-shadow: 1px 1px 2px #880e4f;
            margin-bottom: 20px;
        }

        /* Paràgrafs d'informació */
        p {
            font-size: 1.2rem;
            color: #333;
            margin: 10px 0;
        }

        p strong {
            color: #2e7d32; /* Verd Nadal */
        }

        /* Botons */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #2e7d32; /* Verd Nadal */
            border: 2px solid #1b5e20;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
            margin: 10px 5px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        .btn:hover {
            background-color: #1b5e20; /* Verd fosc */
            transform: scale(1.05);
        }

        /* Botó Delete */
        button {
            background-color: #d84315; /* Taronja Nadal */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        button:hover {
            background-color: #bf360c;
            transform: scale(1.05);
        }
    </style>
        <div class="content">
            <h1>🎬 {{ $movie->title }} 🎄</h1>
            <p><strong>Description:</strong> {{ $movie->description }}</p>
            <p><strong>Year:</strong> {{ $movie->year }}</p>
            <p><strong>Genre:</strong> {{ $movie->genre }}</p>

            <a href="{{ route('movies.edit', $movie->id) }}" class="btn">✏️ Edit</a>

            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">🗑️ Delete</button>
            </form>

            <a href="{{ route('movies.index') }}" class="btn">⬅️ Back to Movies</a>
        </div>
    @endsection
