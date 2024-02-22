<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Services\PokedexService;

class Dashboard extends Component
{
    protected $pokedexService;

    public function __construct(PokedexService $pokedexService)
    {
    $this->pokedexService = $pokedexService;
    }

    //metodo pokedex
    public function pokedex(Request $request)
{
    $pokemonName = $request->input('pokemonName');

    // Inicializar $pokemon con los detalles de Pikachu por defecto
    $pokemon = $this->pokedexService->getPokemon('pikachu');

    try {
        if ($pokemonName) {
            $pokemon = $this->pokedexService->getPokemon($pokemonName);

            if (!$pokemon) {
                // Si no se encuentra el Pokemon, lanzara una excepción manualmente
                throw new \Exception('Pokémon not found');
            }
        }
    } catch (\Exception $e) {
        // Si ocurre una excepcion se pondra por defecto un pikachu y un mensaje de error
        $errorMessage = "Lo siento, ese nombre de Pokemon no existe. ¡Mira un Pikachu!";
        return view('livewire.dashboard', compact('pokemon', 'errorMessage'));
    }

    // Si el Pokémon se encuentra, mostrara la informacion
    return view('livewire.dashboard', compact('pokemon'));
}
}
