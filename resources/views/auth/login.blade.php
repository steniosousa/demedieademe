<x-guest-layout>
<script type="text/javascript" src="/js/login.js"></script>
    <x-auth-card>
        <x-slot name="logo">
            <a>
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Senha')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4" style="display:flex;">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="admin">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Administrador') }}</span>
                </label>
                <x-button onclick="cadastro()"  class="ml-2" style="margin-left:60px;">
                    {{ __('cadastro') }}
                </x-button>
                </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif
               
               

                <x-button class="ml-3" style="margin-right:60px;">
                    {{ __('Logar') }}
                </x-button>
            </div>
        </form>
       
    </x-auth-card>
</x-guest-layout>
