@extends('layouts.app')

@section('content')

    <a href="{{ route('dashboard') }}" 
       class="absolute top-4 left-4 border border-black bg-white-400 text-2xl px-6 py-1 hover:bg-gray-300">
        戻る
    </a>

    <h1 class="text-5xl text-center font-bold my-4">プロフィール編集</h1>

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')

        <div class = "mt-20">
            <label for="name" class = "block text-xl font-bold mb-2">名前</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
            class = >
        </div>

        <div class="mt-20">
            <label for="email" class = "block text-xl font-bold mb-2">メールアドレス</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
            class = >
        </div>

        <div class="mt-20">
            <label for="bio" class = "block text-xl font-bold mb-2">自己紹介</label>
            <input type="text" name="bio" id="bio" value="{{ old('email', $user->bio) }}"
            class = "w-[1500px] h-40">
        </div>
        <!-- 保存ボタン -->
        <div>
            <button type="submit"
                    class="text-2xl bg-blue-400 border border-black text-black px-5 py-2 rounded hover:bg-blue-600 absolute bottom-20 right-20">
                保存する
            </button>
        </div>
    </form>
@endsection