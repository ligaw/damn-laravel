<x-guest-layout>
    <x-slot:header>
        Sign in
    </x-slot:header>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-label for="email" value="{{ __('Email') }}"/>
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                     autofocus autocomplete="username"/>
        </div>

        <div>
            <x-label for="password" value="{{ __('Password') }}"/>
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                     autocomplete="current-password"/>
        </div>

        <div>
            <label for="remember_me" class="flex items-center">
                <x-checkbox id="remember_me" name="remember"/>
                <span class="text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div>


            <x-button>
                {{ __('SEND') }}
            </x-button>
        </div>
    </form>
    <x-validation-errors class="mb-4"/>
    <x-slot:footer>
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
               href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
    </x-slot:footer>
</x-guest-layout>
