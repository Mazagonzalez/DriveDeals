<x-guest-layout>
    <div class="w-full h-full pt-20 bg-center bg-cover lg:pt-0" style="background-image: url('{{ asset('dist/img/bg-form.jpg') }}')">
        <div class="mx-auto p-4 lg:p-10 bg-white/75 rounded-3xl w-[90%] lg:w-[410px] relative lg:-translate-y-1/2 lg:top-1/2 col gap-14">
            <div class="center-content">
                <img src="{{ asset('dist/img/logo.png') }}" class="w-[80%] select-none">
            </div>

            <form action="/register" method="POST">
                @csrf

                <div class="col">
                    <div class="gap-5 col">
                        <div class="gap-1 col">
                            <p class="text-sm font-semibold select-none">{{ __('Name') }}</p>
                            <input type="text" name="name" class="input-form" style="transition: all 0.5s" autofocus>
                        </div>

                        <div class="gap-1 col">
                            <p class="text-sm font-semibold select-none">{{ __('Phone number') }}</p>
                            <input type="text" name="phone_number" class="input-form" style="transition: all 0.5s">
                        </div>

                        <div class="gap-1 col">
                            <p class="text-sm font-semibold select-none">{{ __('Email') }}</p>
                            <input type="email" name="email" class="input-form" style="transition: all 0.5s">
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

                        <div class="gap-1 col">
                            <p class="text-sm font-semibold select-none">{{ __('Password confirmation') }}</p>
                            <div class="relative" x-data="{ show: false }">
                                <input :type="show === false ? 'password' : 'text'" name="password_confirmation" class="input-form" style="transition: all 0.5s" autocomplete="off">

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
                        <p class="skew-x-[15deg]">{{ __('Register') }}</p>
                    </button>

                    <p class="items-center mt-10 col">
                        {{ __("Do you already have an account?") }}

                        <a href="/login" wire:navigate class="font-semibold hover:underline text-primary">
                            {{ __('Log in') }}
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

