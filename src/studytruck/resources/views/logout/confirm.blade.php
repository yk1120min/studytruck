@extends('layouts.app')

@section('content')

<h1 class = "text-center text-5xl"><strong>ログアウト</strong>しますか？</h1>


<div class = "text-center mt-40 text-2xl">
     <div class="flex justify-center gap-10">
        <form action = "{{route('logout')}}" method = "POST">
            @csrf
            <button type ="submit" class = "rounded bg-gray-500 hover:bg-gray-600 px-5 py-1">
                はい
            </button>
        </form>
        <a href = "{{route('dashboard')}}" class = "rounded bg-gray-500 hover:bg-gray-600 px-5 py-1">いいえ</a>
     </div>
</div>







@endsection
