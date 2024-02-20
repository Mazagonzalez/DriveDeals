<div class="absolute px-6 py-2 right-[10%] bg-secondary shadow-input">
    <div class="gap-5 row">
        <p class="text-sm w-[75px] text-center font-semibold">{{ __('Language') }}</p>

        <div class="row gap-2.5">
            <a href="{{ url('locale/en') }}" class="border-[3px] border-transparent rounded-full hover:border-primary">
                <img src="{{ asset('dist/icons/en.png') }}" class="w-5 h-5">
            </a>

            <a href="{{ url('locale/es') }}" class="border-[3px] border-transparent rounded-full hover:border-primary">
                <img src="{{ asset('dist/icons/es.png') }}" class="w-5 h-5">
            </a>
        </div>
    </div>
</div>
