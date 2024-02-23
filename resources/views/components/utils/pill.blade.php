@props(['type' => '', 'bg' => '', 'text' => ''])

@php
    if($type === 'steel'){ $bg = 'bg-slate-400'; $type = __('Steel'); $text = 'text-white'; }
    if($type === 'water'){ $bg = 'bg-blue-500'; $type = __('Water'); $text = 'text-white'; }
    if($type === 'bug'){ $bg = 'bg-lime-400'; $type = __('Bug'); $text = 'text-white'; }
    if($type === 'dragon'){ $bg = 'bg-red-500'; $type = __('Dragon'); $text = 'text-white'; }
    if($type === 'electric'){ $bg = 'bg-yellow-500'; $type = __('Electric'); $text = 'text-white'; }
    if($type === 'ghost'){ $bg = 'bg-[#7b62a3ff]'; $type = __('Ghost'); $text = 'text-white'; }
    if($type === 'fire'){ $bg = 'bg-orange-500'; $type = __('Fire'); $text = 'text-white'; }
    if($type === 'fairy'){ $bg = 'bg-[#fcb8e8ff]'; $type = __('Fairy'); $text = 'text-white'; }
    if($type === 'ice'){ $bg = 'bg-sky-300'; $type = __('Ice'); $text = 'text-white'; }
    if($type === 'fighting'){ $bg = 'bg-[#d66722ff]'; $type = __('Fighting'); $text = 'text-white'; }
    if($type === 'normal'){ $bg = 'bg-zinc-600'; $type = __('Normal'); $text = 'text-white'; }
    if($type === 'plant'){ $bg = 'bg-green-500'; $type = __('Plant'); $text = 'text-white'; }
    if($type === 'psychic'){ $bg = 'bg-[#f266b8ff]'; $type = __('Psychic'); $text = 'text-white'; }
    if($type === 'rock'){ $bg = 'bg-yellow-800'; $type = __('Rock'); $text = 'text-white'; }
    if($type === 'sinister'){ $bg = 'bg-[#707070ff]'; $type = __('Sinister'); $text = 'text-white'; }
    if($type === 'ground'){ $bg = 'bg-yellow-950'; $type = __('Ground'); $text = 'text-white'; }
    if($type === 'flying'){ $bg = 'bg-sky-500'; $type = __('Flying'); $text = 'text-white'; }
    if($type === 'poison'){ $bg = 'bg-[#b97fc9ff]'; $type = __('Poison'); $text = 'text-white'; }
    if($type === 'grass'){ $bg = 'bg-green-500'; $type = __('Plant'); $text = 'text-white'; }
@endphp

<div class="px-2 py-[2px] {{ $bg }} {{ $text }}">
    <p class="text-sm font-semibold skew-x-6">
        {{ $type }}
    </p>
</div>
