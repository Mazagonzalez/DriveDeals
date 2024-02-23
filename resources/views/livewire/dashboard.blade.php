@extends('layouts.app')

@section('content')

    <div class="mx-4 mb-5">
        <form method="GET" action="{{ route('home') }}">
            <div class="items-center gap-4 px-8 py-4 row bg-white/75">
                <div class="relative w-1/2 row">
                    <input type="text" name="searchTerm" class="w-full input-form" style="transition: all 0.5s;">
                    <button type="submit" class="absolute h-full px-8 bg-primary text-white skew-x-[-15deg] right-0">{{ __('Search') }}</button>
                </div>

                <div class="w-1/2 px-6 text-sm font-semibold text-center text-dark">
                    {{ __('Search for a Pokémon by name or using its National Pokédex number.') }}
                </div>
            </div>
        </form>
    </div>

    <div class="relative grid grid-cols-1 gap-8 mx-20 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($pokemonList as $pokemon)
            <div class="card-pokemon" style="transition: all 0.8s">
                <div class="col">
                    <div class="flex justify-end gap-0">
                        @foreach ($pokemon['types'] as $type)
                            <x-utils.pill type="{{ $type['type']['name'] }}" />
                        @endforeach
                    </div>
                    <div class="skew-x-6 center-content" >
                        <img src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name'] }}" class="w-[200px] h-[200px]" loading="lazy">
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="px-10 pt-1 bg-slate-300">
                        <p class="text-sm font-semibold text-center skew-x-6">{{ $pokemon['name'] }}</p>
                    </div>
                </div>

                <div class="w-full text-white bg-dark">
                    <div class="relative items-center justify-between py-2 skew-x-6 row">
                        <div class="w-1/2 text-center col">
                            <p class="text-sm font-bold">{{ __('Height') }}</p>
                            <p class="text-xs font-light">{{ $pokemon['height'] }}</p>
                        </div>

                        <div><x-utils.icons.pokeball w="24" h="24" /></div>

                        <div class="w-1/2 text-center col">
                            <p class="text-sm font-bold">{{ __('Weight') }}</p>
                            <p class="text-xs font-light">{{ $pokemon['weight'] }}</p>
                        </div>
                    </div>

                    <div class="hidden">
                        @foreach ($pokemon['abilities'] as $ability)
                        <li>{{ $ability['ability']['name'] }}</li>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach

        <x-utils.btn-controlls>
            @if ($page > 1)
                <x-slot name="page1">
                    <x-slot name="back">{{ route('home', ['page' => $page - 1, 'searchTerm' => $searchTerm]) }}</x-slot>
                </x-slot>
            @endif

            @if (count($pokemonList) >= 9)
                <x-slot name="page2">
                    <x-slot name="next">{{ route('home', ['page' => $page + 1, 'searchTerm' => $searchTerm]) }}</x-slot>
                </x-slot>
            @endif
        </x-utils.btn-controlls>
    </div>
@endsection

