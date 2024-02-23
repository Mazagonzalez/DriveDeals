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
    // Obtener el término de búsqueda proporcionado por el usuario
    $searchTerm = $request->input('searchTerm');

    // Obtener el número de página actual desde la solicitud
    $page = $request->input('page', 1);

    // Calcular el índice inicial y final de los Pokémon a mostrar en esta página
    $startIndex = ($page - 1) * 9;
    $endIndex = $startIndex + 8;

    // Inicializar $pokemonList como un arreglo vacío
    $pokemonList = [];

    try {
        // Si se proporciona un término de búsqueda, obtener los detalles de los Pokémon que coincidan
        if ($searchTerm) {
            // Si el término de búsqueda es una letra, buscar los Pokémon cuyo nombre comienza con esa letra
            if (ctype_alpha($searchTerm)) {
                // Obtener los detalles de los Pokémon cuyo nombre comienza con la letra especificada
                for ($i = 1; count($pokemonList) < 9; $i++) {
                    $pokemon = $this->pokedexService->getPokemon($i);
                    // Verificar si el nombre del Pokémon comienza con la letra de búsqueda
                    if (strtolower(substr($pokemon['name'], 0, 1)) === strtolower($searchTerm)) {
                        $pokemonList[] = $pokemon;
                    }
                }
            } else {
                // Si el término de búsqueda no es una letra, no realizar la búsqueda
                $errorMessage = "La búsqueda debe ser por una letra única.";
                return view('livewire.dashboard', compact('pokemonList', 'errorMessage', 'page'));
            }
        } else {
            // Si no se proporciona ningún término de búsqueda, obtener los detalles de los Pokémon en el rango de índices calculado
            for ($i = $startIndex + 1; count($pokemonList) < 9; $i++) {
                $pokemon = $this->pokedexService->getPokemon($i);
                if ($pokemon) {
                    $pokemonList[] = $pokemon;
                }
            }
        }
    } catch (\Exception $e) {
        // Manejar la excepción si ocurre algún error al obtener los detalles del Pokémon
        $errorMessage = "Lo siento, ha ocurrido un error al obtener los detalles del Pokémon.";
        return view('livewire.dashboard', compact('pokemonList', 'errorMessage', 'page'));
    }

    // Si se obtienen los detalles del Pokémon correctamente, mostrar la vista con la lista de Pokémon
    return view('livewire.dashboard', compact('pokemonList', 'page', 'searchTerm'));

}



}
