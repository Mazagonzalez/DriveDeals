<?php

namespace App\Services;

use GuzzleHttp\Client;

class PokedexService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://pokeapi.co/api/v2/',
        ]);
    }

    public function getPokemon($pokemonName)
    {
        $response = $this->client->get("pokemon/$pokemonName");
        return json_decode($response->getBody(), true);
    }
}
