<x-guest-layout>
    <x-slot:header>
        Sign in page
    </x-slot:header>

    <div class="container">
        <div style="height:13.5em;border: 1px solid green;display: flex; flex-direction: column; font-weight: bold; justify-content: end;">
            <div style="height: 4.5em;">
                Sign in form
            </div>
        </div>
        <div style="height: 13.5em; border: 1px solid green;">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div style="display: flex; flex-direction: row; height: 4.5em; border: 1px dashed blue;">
                    <div style="flex-direction: column; justify-content: flex-start; display: flex; height: 4.5em;">
                        <label for="email" style="height: 1.5em;">{{ __('Email') }}</label>
                        <input id="email" type="email" name="email"
                               required
                               autofocus autocomplete="username"
                               style="height: 2em;"/>
                    </div>
                    <div style="flex-direction: column; justify-content: flex-start; display: flex; height: 4.5em;">
                        <label for="password" style="height: 1.5em;">{{ __('Password') }}</label>
                        <div style="height: 3em;">
                            <input id="password" type="password" name="password" required
                                   autofocus autocomplete="username"
                                   autocomplete="current-password" style="height: 2em;"/>
                        </div>
                    </div>
                    <div style="flex-direction: column; justify-content: flex-start; display: flex; height: 4.5em;">
                        <label for="remember_me" style="height: 1.5em;">{{ __('Remember me') }}</label>
                        <div style="height: 3em;">
                            <x-checkbox id="remember_me" name="remember"
                                        style="border: 1px solid red;height: 2em; width: 2em"/>
                        </div>
                    </div>
                </div>
                <div style="height: 4.5em; border: 1px red;">
                    <x-button>
                        {{ __('SEND') }}
                    </x-button>
                </div>
                <div style="height: 4.5em; border: 1px red;">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                           href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        <x-validation-errors class="mb-4"/>
                    @endif
                </div>
            </form>
        </div>
        <div style="border:1px solid green;height: 13.5em">

        </div>
    </div>

    <x-slot:footer>
        Footer
    </x-slot:footer>
</x-guest-layout>
