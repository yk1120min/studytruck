@extends('layouts.app')

@section('content')

    <!-- 左上のユーザーID検索フォーム -->
    <form action="{{ route('users.records.index', ['public_id' => $user->public_id]) }}" method="GET" 
          class="absolute top-4 left-4 rounded flex items-center space-x-2"> 
        @csrf
        <button type="submit" class="bg-gray-500 text-white px-3 py-1 rounded hover:bg-gray-600">検索</button> 
        <input type="text" name="public_id" id="public_id" class="border rounded px-2 py-1" placeholder="ユーザID"> 
    </form>

    {{-- 右上のプロフィール＆ログアウトボタン --}}
    <div class="absolute top-4 right-10 flex flex-col items-end space-y-2">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-gray-500 text-white px-3 py-1 rounded hover:bg-gray-600">
                ログアウト
            </button>
        </form>
        <a href="{{ route('profile.edit') }}" class="bg-gray-500 text-white px-3 py-1 rounded hover:bg-gray-600">
            プロフィール
        </a>
    </div>

    <h1 class="text-5xl text-center font-bold my-4">学習記録一覧</h1>


    {{-- 新しい記録ボタン --}}
    <div class="mt-20 pl-20 mb-5">
        <a href="{{ route('records.create') }}" class="text-2xl bg-blue-400 border border-black text-black px-5 py-2 rounded hover:bg-blue-600">
        +新しい記録
        </a>
    </div>

    {{-- 学習記録一覧 --}}
    <div class="border border-gray-300 rounded p-4 bg-red-100 shadow-md w-[1850px] mx-auto">
        
         @if ($learningLogs->isEmpty())
            <p>まだ学習記録がありません。</p>
         @else
        <table class="w-full border-0">
            <thead>
                <tr>
                    <th class="p-2 border-0 border-black text-left">タイトル</th>
                    <th class="p-2 border-0 border-black text-left">カテゴリ</th>
                    <th class="p-2 border-0 border-black text-left">勉強時間</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($learningLogs as $log)
                    <tr>
                        <td class="p-2 border border-black border-r-0 bg-white">{{ $log->title }}</td>
                        <td class="p-2 border border-black border-l-0 border-r-0 bg-white">{{ $log->category }}</td>
                        <td class="p-2 border border-black border-l-0 text-left bg-white">{{ $log->minutes }} 分</td>
                        <td class="p-2 border-0 text-center w-[100px]">
                            <a href="{{ route('records.edit', $log->id) }}"
                                class="px-3 py-1 bg-blue-400 text-black rounded hover:bg-blue-600 text-xl">
                                編集
                            </a>
                        </td>>
                    </tr>
                    <tr class="h-4"><td colspan="3"></td></tr>
                @endforeach
            </tbody>
        </table>
         @endif
    </div>

    

@endsection