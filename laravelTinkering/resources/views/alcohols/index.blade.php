<!-- resources/views/alcohols/index.blade.php -->
@extends('layouts.app')

@section('title', 'Alcohols List')

@section('content')
    <style>
        /* Contenidor Principal */
        .content {
            max-width: 800px;
            margin: 30px auto;
            background-color: #fdf6e3; /* Color crema nadalenc */
            border: 3px solid #b71c1c; /* Vermell Nadal intens */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Títol */
        h1 {
            color: #b71c1c; /* Vermell Nadal intens */
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-align: center;
            text-shadow: 2px 2px 3px #880e4f;
        }

        /* Botó per afegir */
        .btn {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            font-size: 1.2rem;
            background-color: #2e7d32; /* Verd Nadal */
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #1b5e20; /* Verd Nadal més fosc */
            transform: scale(1.05);
        }

        /* Llista */
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 10px 15px;
            margin-bottom: 10px;
            border: 1px solid #d32f2f; /* Vermell Nadal suau */
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        li:hover {
            background-color: #ffe5e5; /* To suau vermell festiu */
            transform: scale(1.02);
        }

        /* Enllaços de la llista */
        li a {
            color: #b71c1c; /* Vermell Nadal */
            text-decoration: none;
            font-weight: bold;
        }

        li a:hover {
            text-decoration: underline;
        }

        /* Botons */
        .btn-group {
            display: flex;
            gap: 10px;
        }

        form button {
            background-color: #d32f2f; /* Vermell Nadal intens */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        form button:hover {
            background-color: #b71c1c; /* Vermell Nadal més intens */
        }

        /* Botó "Edit" amb mida reduïda */
        .btn-small {
            padding: 5px 10px; /* Mida més petita */
            font-size: 0.8rem; /* Text més petit */
            background-color: #0288d1; /* Blau suau per distingir-lo */
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .btn-small:hover {
            background-color: #0277bd; /* Blau més fosc */
            transform: scale(1.05);
        }

    </style>

    <div class="content">
        <h1>🍷 Alcohols List 🎄</h1>
        <a href="{{ route('alcohols.create') }}" class="btn">➕ Add New Alcohol</a>
        <ul>
            @foreach ($alcohols as $alcohol)
                <li>
                    <a href="{{ route('alcohols.show', $alcohol->id) }}">{{ $alcohol->name }}</a>
                    <div class="btn-group">
                        <a href="{{ route('alcohols.edit', $alcohol->id) }}" class="btn-small">✏️ Edit</a>
                        <form action="{{ route('alcohols.destroy', $alcohol->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">🗑️ Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
