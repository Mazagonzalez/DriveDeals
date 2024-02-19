<x-guest-layout>
    <div class="col lg:flex-row">
        <div class="flex justify-center w-1/2 my-auto">
            <div class="w-[50%] col gap-20">
                <div class="gap-2 col">
                    <p class="text-4xl font-bold">
                        {{ __('Login') }}
                    </p>
                    <span class="">{{ __("Welcome, it's a pleasure to have you with us") }}</span>
                </div>

                <form action="/login" method="POST">
                    @csrf

                    <div class="gap-4 col">
                        <div class="gap-1 col">
                            <p class="text-sm font-semibold">{{ __('Email') }}</p>
                            <input type="email" name="email" class="input-form" autofocus>
                        </div>

                        <div class="gap-1 col">
                            <p class="text-sm font-semibold">{{ __('Password') }}</p>
                            <div class="relative" x-data="{ show: false }">
                                <input :type="show === false ? 'password' : 'text'" name="password" class="input-form">

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

                        <input type="submit" value="Login" class="btn-form">


                        <p class="justify-center mt-8 col lg:flex-row lg:gap-1">
                            {{ __("Don't have an account yet?") }}

                            <a href="/register" wire:navigate class="font-semibold hover:underline text-primary">
                                {{ __('Create Account') }}
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <div class="hidden w-1/2 h-screen lg:block">
            <div class="w-full h-full bg-primary"></div>
        </div>
    </div>
</x-guest-layout>
