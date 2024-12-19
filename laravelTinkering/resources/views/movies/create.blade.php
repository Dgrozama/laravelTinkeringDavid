@extends('layouts.app')

@section('title', 'Add Movie')

@section('content')
    <style>
        /* Contenidor principal */
        .content {
            max-width: 600px;
            margin: 30px auto;
            background-color: #fff8e1; /* Color crema suau */
            border: 3px solid #d32f2f; /* Vora vermell Nadal */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Títol */
        h1 {
            color: #b71c1c; /* Vermell Nadal intens */
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 3px #880e4f;
        }

        /* Formulari */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            align-items: center;
        }

        label {
            font-size: 1.1rem;
            font-weight: bold;
            color: #2e7d32; /* Verd Nadal */
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            max-width: 500px;
            padding: 10px;
            font-size: 1rem;
            border: 2px solid #d32f2f; /* Vora vermell Nadal */
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
            font-size: 1.1rem;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        button:hover {
            background-color: #1b5e20;
            transform: scale(1.05);
        }

        /* Decoració addicional */
        .form-decoration {
            font-size: 2rem;
            color: #b71c1c; /* Vermell Nadal */
            margin-bottom: 10px;
        }

    </style>
    <div class="content">
        <div class="form-decoration">🎄</div>
        <h1>Add a New Movie 🎬</h1>
        <form action="{{ route('movies.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div>
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
            </div>
            <div>
                <label for="year">Year:</label>
                <input type="number" id="year" name="year" required>
            </div>
            <div>
                <label for="genre">Genre:</label>
                <input type="text" id="genre" name="genre" required>
            </div>
            <button type="submit">🎁 Add Movie</button>
        </form>
    </div>
@endsection
