@extends('layouts.app')

@section('content')

<a href = "{{route('dashboard')}}" class= "absolute top-4 left-4 border border-black bg-white-400 text-2xl px-6 py-1 hover:bg-gray-300">
    戻る
</a>

 <h1 class="text-5xl text-center font-bold my-4">{{ $user->name }}のプロフィール</h1>


<div class="w-[1500px] mx-auto mt-32">

    {{-- 名前 --}}
    <h2 class="text-2xl mb-1">{{ $user->name }}</h2>

    {{-- 自己紹介欄 --}}
    <div class="border border-gray-400 rounded p-4 bg-white shadow-md">
        <h3 class="text-xl font-bold mb-1">自己紹介</h3>
        <p class="text-gray-800 whitespace-pre-line text-xl">
            {{ $user->bio }}
        </p>
    </div>

</div>

{{-- 学習記録一覧 --}}
    <div class="border border-gray-300 rounded p-4 bg-red-100 shadow-md w-[1500px] mx-auto mt-5">
        
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
                    <tr class = "bg-white">
                        <td class="p-2 border border-black border-r-0">{{ $log->title }}</td>
                        <td class="p-2 border border-black border-l-0 border-r-0">{{ $log->category }}</td>
                        <td class="p-2 border border-black border-l-0 text-left">{{ $log->minutes }} 分</td>
                        </td>
                    </tr>
                    <tr class="h-4"><td colspan="3"></td></tr>
                @endforeach
            </tbody>
        </table>
         @endif
    </div>












@endsection
