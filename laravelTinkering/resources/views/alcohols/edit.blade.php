@extends('layouts.app')

@section('title', 'Edit Alcohol')

@section('content')
    <style>
        /* Contenidor Principal */
        .content {
            max-width: 600px;
            margin: 30px auto;
            background-color: #fdf6e3; /* Crema Nadal */
            border: 3px solid #b71c1c; /* Vermell Nadal intens */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Títol */
        h1 {
            color: #b71c1c; /* Vermell Nadal */
            font-size: 2rem;
            text-align: center;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px #880e4f;
        }

        /* Formulari */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 1.1rem;
            color: #880e4f; /* Tó vermell fosc */
        }

        input {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #d32f2f; /* Vermell suau */
            border-radius: 5px;
            background-color: #fff;
            transition: all 0.3s ease;
        }

        input:focus {
            border-color: #b71c1c; /* Vermell Nadal intens */
            outline: none;
            box-shadow: 0 0 5px #b71c1c;
        }

        /* Botó Actualitzar */
        button {
            padding: 10px 15px;
            font-size: 1rem;
            background-color: #2e7d32; /* Verd Nadal */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        button:hover {
            background-color: #1b5e20; /* Verd Nadal més fosc */
            transform: scale(1.05);
        }

        /* Botó Tornar */
        .btn {
            margin-top: 15px;
            display: inline-block;
            padding: 8px 15px;
            font-size: 1rem;
            background-color: #0288d1; /* Blau suau */
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #0277bd; /* Blau més fosc */
        }
    </style>

    <div class="content">
        <h1>🎁 Edit Alcohol 🍷</h1>
        <form action="{{ route('alcohols.update', $alcohol->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ $alcohol->name }}" required>
            </div>
            <div>
                <label for="type">Type:</label>
                <input type="text" id="type" name="type" value="{{ $alcohol->type }}" required>
            </div>
            <div>
                <label for="percentage">Percentage:</label>
                <input type="number" id="percentage" name="percentage" value="{{ $alcohol->percentage }}" required>
            </div>
            <button type="submit">🎄 Update Alcohol</button>
        </form>
        <a href="{{ route('alcohols.index') }}" class="btn">⬅️ Back to Alcohols</a>
    </div>
@endsection
