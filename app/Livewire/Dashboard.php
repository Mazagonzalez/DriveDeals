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
    // Obtener el número de página actual desde la solicitud
    $page = $request->input('page', 1);

    // Calcular el índice inicial y final de los Pokémon a mostrar en esta página
    $startIndex = ($page - 1) * 9;
    $endIndex = $startIndex + 8;

    // Inicializar $pokemonList como un arreglo vacío
    $pokemonList = [];

    try {
        // Obtener los detalles de los Pokémon en el rango de índices calculado
        for ($i = $startIndex + 1; $i <= $endIndex + 1; $i++) {
            $pokemon = $this->pokedexService->getPokemon($i);
            if ($pokemon) {
                $pokemonList[] = $pokemon;
            }
        }
    } catch (\Exception $e) {
        // Manejar la excepción si ocurre algún error al obtener los detalles del Pokémon
        $errorMessage = "Lo siento, ha ocurrido un error al obtener los detalles del Pokémon.";
        return view('livewire.dashboard', compact('pokemonList', 'errorMessage'));
    }

    // Si se obtienen los detalles del Pokémon correctamente, mostrar la vista con la lista de Pokémon
    return view('livewire.dashboard', compact('pokemonList', 'page'));
}
}
