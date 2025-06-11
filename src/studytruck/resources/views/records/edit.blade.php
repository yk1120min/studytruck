@extends('layouts.app')

@section('content')

    <a href="{{ route('dashboard') }}" 
       class="absolute top-4 left-4 border border-black bg-white-400 text-2xl px-6 py-1 hover:bg-gray-300">
        戻る
    </a>

    <!-- 学習記録編集フォーム -->
    <form action="{{ route('records.update', ['id' => $learningLog->id]) }}" method="POST" class="mt-20 ml-20">
        @csrf
        @method('PUT')

        <!-- タイトル編集 -->
        <label for="title" class="block text-xl font-bold mb-2">タイトル</label>
        <input type="text" name="title" id="title" value="{{ $learningLog->title }}" 
               class="border rounded text-2xl w-[1000px] h-16 mb-6">

        <!-- カテゴリ編集 -->
        <label for="category" class="block text-xl font-bold mb-2 mt-5">カテゴリ</label>
        <input type="text" name="category" id="category" value="{{ $learningLog->category }}"
               class="border rounded text-2xl w-[1000px] h-16 mb-6">

        <!-- 勉強時間編集 -->
        <label for="minutes" class="block text-xl font-bold mb-2 mt-5">勉強時間</label>
        <select name="minutes" id="minutes"
                class="border rounded px-4 py-2 w-48 h-16 mb-6">
            <option value="15" {{$learningLog->minutes == 15 ? 'selected' : '' }}>15分</option>
            <option value="30" {{$learningLog->minutes == 30 ? 'selected' : '' }}>30分</option>
            <option value="45" {{$learningLog->minutes == 45 ? 'selected' : '' }}>45分</option>
            <option value="60" {{$learningLog->minutes == 60 ? 'selected' : '' }}>1時間</option>
            <option value="90" {{$learningLog->minutes == 90 ? 'selected' : '' }}>1時間30分</option>
            <option value="120" {{$learningLog->minutes == 120 ? 'selected' : '' }}>2時間</option>
        </select>
         
        <!-- メモ編集 -->
        <label for="memo" class="block text-xl font-bold mb-2 mt-5">メモ</label>
        <input type="text" name="memo" id="memo" value = "{{ $learningLog->memo }}"
               class="border rounded text-2xl w-[1500px] h-40 mb-6">
         
        <!-- 編集ボタン -->
        <div>
            <button type="submit"
                    class="text-2xl bg-blue-400 border border-black text-black px-5 py-2 rounded hover:bg-blue-600 absolute bottom-20 right-20">
                編集する
            </button>
        </div>
    </form>

@endsection