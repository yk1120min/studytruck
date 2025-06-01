@extends('layouts.app')

@section('content')
  <h1>ダッシュボード</h1>

  <!-- 自分の学習記録一覧（例） -->
  <h2>あなたの学習記録</h2>
  <ul>
    {{-- @foreach ($learningLogs as $log) --}}
      <li>タイトル: ○○ / カテゴリ: △△ / 時間: 30分</li>
    {{-- @endforeach --}}
  </ul>

  <!-- ユーザーID検索フォーム -->
  <form action="{{ route('dashboard.search') }}" method="POST">
    @csrf
    <label for="public_id">他ユーザーの公開ID:</label>
    <input type="text" name="public_id" id="public_id" required>
    <button type="submit">検索</button>
  </form>

  <!-- ボタンリンク -->
  <div class="mt-4">
    <a href="{{ route('records.create') }}">新しい学習記録を作成</a> |
    <a href="{{ route('profile.edit') }}">プロフィール編集</a> |
    <form action="{{ route('logout') }}" method="POST" style="display:inline">
      @csrf
      <button type="submit">ログアウト</button>
    </form>
  </div>
@endsection