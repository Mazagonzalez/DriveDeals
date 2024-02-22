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

    //metodo pokedex
    public function pokedex(Request $request)
{
    $pokemonName = $request->input('pokemonName');

    try {
        $pokemon = $this->pokedexService->getPokemon($pokemonName);

        if (!$pokemon) {
            // Si no se encuentra el Pokemon, lanzara una excepción manualmente
            throw new \Exception('Pokémon not found');
        }
    } catch (\Exception $e) {
        // Si ocurre una excepción se ponddra por defecto un pikachu y un mensaje de error
        $pokemon = $this->pokedexService->getPokemon('pikachu');
        $errorMessage = "Lo siento, ese nombre de Pokemon no existe. ¡Mira un Pikachu!";
        return view('main', compact('pokemon', 'errorMessage'));
    }

    // Si el Pokemon se encuentra, mostrara la información de manera normal
    return view('main', compact('pokemon'));
}
}
