@extends('layouts.app')

@section('title', 'Alcohol Details')

@section('content')
    <style>
        /* Contenidor Principal */
        .content {
            max-width: 600px;
            margin: 30px auto;
            background-color: #fdf6e3; /* Fons crema */
            border: 3px solid #b71c1c; /* Vermell Nadal */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Títol */
        h1 {
            color: #b71c1c; /* Vermell Nadal */
            font-size: 2.5rem;
            margin-bottom: 15px;
            text-shadow: 1px 1px 4px #880e4f;
        }

        /* Paràgrafs */
        p {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 10px;
        }

        p strong {
            color: #880e4f; /* Vermell fosc Nadal */
        }

        /* Botons */
        .btn {
            display: inline-block;
            margin: 10px 5px;
            padding: 10px 15px;
            font-size: 1rem;
            background-color: #2e7d32; /* Verd Nadal */
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        .btn:hover {
            background-color: #1b5e20; /* Verd Nadal més fosc */
            transform: scale(1.05);
        }

        /* Botó Eliminar */
        form button {
            padding: 10px 15px;
            font-size: 1rem;
            background-color: #d32f2f; /* Vermell Nadal */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        form button:hover {
            background-color: #b71c1c; /* Vermell Nadal més intens */
        }

        /* Botó Tornar */
        .btn-back {
            background-color: #0288d1; /* Blau suau */
        }

        .btn-back:hover {
            background-color: #0277bd; /* Blau més fosc */
        }
    </style>

    <div class="content">
        <h1>🍹 {{ $alcohol->name }} 🎄</h1>
        <p><strong>Type:</strong> {{ $alcohol->type }}</p>
        <p><strong>Percentage:</strong> {{ $alcohol->percentage }}%</p>
        <div>
            <a href="{{ route('alcohols.edit', $alcohol->id) }}" class="btn">✏️ Edit</a>
            <form action="{{ route('alcohols.destroy', $alcohol->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">🗑️ Delete</button>
            </form>
            <a href="{{ route('alcohols.index') }}" class="btn btn-back">⬅️ Back to Alcohols</a>
        </div>
    </div>
@endsection
