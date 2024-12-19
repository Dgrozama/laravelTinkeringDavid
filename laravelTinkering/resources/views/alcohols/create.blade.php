@extends('layouts.app')

@section('title', 'Add Alcohol')

@section('content')
    <style>
        /* Contenidor Principal */
        .content {
            max-width: 600px;
            margin: 30px auto;
            background-color: #fdf6e3; /* Color crema nadalenc */
            border: 3px solid #b71c1c; /* Vermell Nadal */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Títol */
        h1 {
            color: #b71c1c; /* Vermell Nadal */
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-align: center;
            text-shadow: 1px 1px 4px #880e4f;
        }

        /* Formulari */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 1.1rem;
            color: #333;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 2px solid #d32f2f; /* Vermell Nadal suau */
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        input:focus {
            outline: none;
            border-color: #b71c1c; /* Vermell Nadal més intens */
            box-shadow: 0 0 5px rgba(183, 28, 28, 0.5);
        }

        /* Botó d'Afegir */
        button {
            background-color: #2e7d32; /* Verd Nadal */
            color: white;
            padding: 10px 15px;
            font-size: 1.2rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        button:hover {
            background-color: #1b5e20; /* Verd Nadal més fosc */
            transform: scale(1.05);
        }
    </style>

    <div class="content">
        <h1>🎄 Add Alcohol 🍷</h1>
        <form action="{{ route('alcohols.store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="type">Type:</label>
                <input type="text" id="type" name="type" required>
            </div>
            <div>
                <label for="percentage">Percentage:</label>
                <input type="number" id="percentage" name="percentage" required>
            </div>
            <button type="submit">➕ Add Alcohol</button>
        </form>
    </div>
@endsection
