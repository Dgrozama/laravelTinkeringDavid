@extends('layouts.app')

@section('title', 'Edit Movie')

@section('content')

    <style>
        /* Contenidor principal */
        .content {
            max-width: 600px;
            margin: 30px auto;
            background-color: #fffdf6; /* Blanc crema suau */
            border: 3px solid #b71c1c; /* Vora vermell Nadal */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Títol */
        h1 {
            color: #b71c1c; /* Vermell Nadal */
            font-size: 2.2rem;
            text-align: center;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px #880e4f;
        }

        /* Formulari */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 1.1rem;
            font-weight: bold;
            color: #2e7d32; /* Verd Nadal */
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 2px solid #b71c1c; /* Vora vermell Nadal */
            border-radius: 5px;
            background-color: #fff;
            color: #333;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #2e7d32; /* Verd Nadal */
            box-shadow: 0 0 5px #2e7d32;
        }

        /* Botó Submit */
        button {
            background-color: #2e7d32; /* Verd Nadal */
            color: #fff;
            font-size: 1rem;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        button:hover {
            background-color: #1b5e20;
            transform: scale(1.05);
        }

        /* Enllaç Back */
        .btn {
            display: inline-block;
            margin-top: 20px;
            text-align: center;
            padding: 10px 20px;
            color: #fff;
            background-color: #b71c1c; /* Vermell Nadal */
            border: 2px solid #880e4f;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        .btn:hover {
            background-color: #880e4f;
            transform: scale(1.05);
        }
    </style>
    <div class="content">
        <h1>🎄 Edit Movie 🎬</h1>
        <form action="{{ route('movies.update', $movie->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="{{ $movie->title }}" required>
            </div>
            <div>
                <label for="description">Description:</label>
                <textarea id="description" name="description" required>{{ $movie->description }}</textarea>
            </div>
            <div>
                <label for="year">Year:</label>
                <input type="number" id="year" name="year" value="{{ $movie->year }}" required>
            </div>
            <div>
                <label for="genre">Genre:</label>
                <input type="text" id="genre" name="genre" value="{{ $movie->genre }}" required>
            </div>
            <button type="submit">🎁 Update Movie</button>
        </form>
        <a href="{{ route('movies.index') }}" class="btn">⬅️ Back to Movies</a>
    </div>
@endsection
