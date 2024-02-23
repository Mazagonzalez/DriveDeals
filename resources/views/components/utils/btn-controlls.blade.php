@php
    $end = 'justify-end';
    $between = 'justify-between';
@endphp

<div class="absolute flex w-full -translate-y-1/2 top-1/2 @if(isset($page1) && isset($page2)) {{ $between }} @else {{ $end }} @endif">
    @isset($page1)
        <a wire:navigate href="{{ $back }}" class="relative btn-continue -left-20">
            ❮
        </a>
    @endisset

    @isset($page2)
        <a wire:navigate href="{{ $next }}" class="relative btn-continue -right-20">
            ❯
        </a>
    @endisset
</div>
