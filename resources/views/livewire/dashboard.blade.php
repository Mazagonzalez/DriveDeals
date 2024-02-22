@extends('layouts.app')

@section('content')
    <div>
        <h1>Search Pokémon</h1>
        <!-- Búsqueda -->
        <form method="GET" action="{{ route('home') }}">
            <input type="text" name="searchTerm" placeholder="Enter Pokémon name or number">
            <button type="submit">Search</button>
        </form>
        <h1>Pokémon Gallery</h1>
        <div>
            @foreach ($pokemonList as $pokemon)
                <div>
                    <img src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name'] }}">
                    <h3>{{ $pokemon['name'] }}</h3>
                    <p>Height: {{ $pokemon['height'] }}</p>
                    <p>Weight: {{ $pokemon['weight'] }}</p>

                     <!-- Mostrar habilidades -->
                    <h3>Abilities:</h3>
                    <ul>
                        @foreach ($pokemon['abilities'] as $ability)
                          <li>{{ $ability['ability']['name'] }}</li>
                        @endforeach
                    </ul>

                    <!-- Mostrar tipos -->
                    <h3>Types:</h3>
                    <ul>
                        @foreach ($pokemon['types'] as $type)
                            <li>{{ $type['type']['name'] }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        <div>
            @if ($page > 1)
                <a href="{{ route('home', ['page' => $page - 1, 'searchTerm' => $searchTerm]) }}">Previous</a>
            @endif

            @if (count($pokemonList) >= 9)
                <a href="{{ route('home', ['page' => $page + 1, 'searchTerm' => $searchTerm]) }}">Next</a>
            @endif
        </div>
    </div>
@endsection

