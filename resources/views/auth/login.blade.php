<x-guest-layout>
    <div class="relative w-full h-full bg-center bg-cover" style="background-image: url('{{ asset('dist/img/login.jpg') }}')">
        <div class="z-10 w-full h-full bg-gradient-to-t from-black via-black/50 to-black/40 backdrop-blur-sm"></div>

        <div class="fixed p-4 lg:p-10 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-white/75 rounded-3xl w-[90%] lg:w-[410px] col gap-14">
            <div class="center-content">
                <img src="{{ asset('dist/img/logo.png') }}" class="w-[80%] select-none">
            </div>

            <form action="/login" method="POST">
                @csrf

                <div class="col">
                    <div class="gap-5 col">
                        <div class="gap-1 col">
                            <p class="text-sm font-semibold select-none">{{ __('Email') }}</p>
                            <input type="email" name="email" class="input-form" style="transition: all 0.5s" autofocus>
                        </div>

                        <div class="gap-1 col">
                            <p class="text-sm font-semibold select-none">{{ __('Password') }}</p>
                            <div class="relative" x-data="{ show: false }">
                                <input :type="show === false ? 'password' : 'text'" name="password" class="input-form" style="transition: all 0.5s" autocomplete="off">

                                <div class="absolute top-2 right-3" @click="show = !show">
                                    <div x-show="!show" class="tooltip tooltip-top" data-tip="{{ __('See password') }}">
                                        <x-utils.icons.eye style="eye-form tooltip tooltip-top" />
                                    </div>

                                    <div x-show="show" class="tooltip tooltip-top" data-tip="{{ __('Hide password') }}">
                                        <x-utils.icons.eye-slash style="eye-form" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="mt-10 btn-form">
                        <p class="skew-x-[15deg]">{{ __('Login') }}</p>
                    </button>

                    <p class="items-center mt-10 col">
                        {{ __("Don't have an account yet?") }}

                        <a href="/register" wire:navigate class="font-semibold hover:underline text-primary">
                            {{ __('Create Account') }}
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
