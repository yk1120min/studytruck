<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="text-5xl text-center font-bold my-4">ログイン</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('メールアドレス')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

    
       <!-- -->
       <!-- x-fileはコンポーネントを意味する。-->
       <!--　　__()・・・Laravelの翻訳ヘルパー関数（正式な関数名）　　-->
       <!-- :はバインディング　-->


        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('パスワード')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

       
        <div class="text-center mt-4">
        <!--一旦省略＝
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        -->

            <x-primary-button class="ms-3 mx-auto !text-2xl">
                {{ __('ログイン') }}
            </x-primary-button>
        </div>

    </form>
    <p class ="mt-4 text-center underline text-blue-600">
        <a href="{{route('register')}}" class =  "hover:text-blue-800">
            新規登録</a>はこちら
    </p>
</x-guest-layout>
