<x-guest-layout>

    <div class="text-center mb-8">
        <h1 class="text-4xl font-extrabold text-blue-700">LinkUp</h1>
        <p class="mt-2 text-gray-500">
            Connectez-vous à votre réseau professionnel
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />

            <x-text-input
                id="email"
                class="block mt-1 w-full rounded-lg"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                autocomplete="username" />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-5">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input
                id="password"
                class="block mt-1 w-full rounded-lg"
                type="password"
                name="password"
                required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember -->
        <div class="flex items-center justify-between mt-5">
            <label class="inline-flex items-center">
                <input
                    id="remember_me"
                    type="checkbox"
                    class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500"
                    name="remember">

                <span class="ml-2 text-sm text-gray-600">
                    Remember me
                </span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-blue-600 hover:underline"
                    href="{{ route('password.request') }}">
                    Forgot password?
                </a>
            @endif
        </div>

        <!-- Button -->
        <div class="mt-8">
            <x-primary-button
                class="w-full justify-center bg-blue-600 hover:bg-blue-700 py-3 rounded-lg">
                Sign In
            </x-primary-button>
        </div>

        <!-- Register -->
        <div class="text-center mt-6">
            <span class="text-gray-500">
                Don't have an account?
            </span>

            <a href="{{ route('register') }}"
                class="text-blue-600 font-semibold hover:underline">
                Register
            </a>
        </div>

    </form>

</x-guest-layout>
