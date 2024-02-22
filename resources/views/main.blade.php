@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Search Pokémon</h1>
        <!-- Busqueda -->
        <form method="GET" action="{{ route('home') }}">
            <input type="text" name="pokemonName" placeholder="Enter Pokémon name or number">
            <button type="submit">Search</button>
        </form>

        @if(isset($pokemon))
        <h2>{{ $pokemon['name'] }}</h2>
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
    @else
        <p>No Pokémon found.</p>
    @endif
    </div>
@endsection





