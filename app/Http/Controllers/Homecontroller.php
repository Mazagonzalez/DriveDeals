<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Services\PokedexService;

class Homecontroller extends Controller
{

    //pokedex service
    protected $pokedexService;

    public function __construct(PokedexService $pokedexService)
    {
    $this->pokedexService = $pokedexService;
    }
    public function pokedex(Request $request)
{
    $pokemonName = $request->input('pokemonName');

    if ($pokemonName) {
        $pokemon = $this->pokedexService->getPokemon($pokemonName);
        // Si no se encuentra el Pokémon, establecer los detalles de Pikachu por defecto
        if (!$pokemon) {
            $pokemon = $this->pokedexService->getPokemon('pikachu');
        }
    } else {
        // Si no se proporciona ningún nombre de Pokémon, mostrar los detalles de Pikachu por defecto
        $pokemon = $this->pokedexService->getPokemon('pikachu');
    }

    return view('main', compact('pokemon'));
}
}
