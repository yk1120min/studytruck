<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learninglog;

class RecordController extends Controller
{
    public function create(){
        return view('records.create');
    }

    public function store(Request $request){
        // バリデーション
    $validated = $request->validate([
        'title'    => 'required|string|max:50',
        'category' => 'required|string',
        'minutes'  => 'required|integer|min:1',
        'memo'     => 'nullable|string|max:500',
    ]);

    // 保存処理
    $learningLog = new Learninglog();
    $learningLog->user_id  = auth()->id(); 
    $learningLog->title    = $validated['title'];
    $learningLog->category = $validated['category'];
    $learningLog->minutes  = $validated['minutes'];
    $learningLog->memo     = $validated['memo'] ?? '';
    $learningLog->save();

    // リダイレクト（ダッシュボードなどに戻す）
    return redirect()->route('dashboard');
    }


    public function edit($id){
         $learningLog = Learninglog::findOrFail($id); // ID で取得
    
        return view('records.edit',compact('learningLog'));
    }

    public function update(Request $request, $id){
    // バリデーション
    $validated = $request->validate([
        'title'    => 'required|string|max:50',
        'category' => 'required|string',
        'minutes'  => 'required|integer|min:1',
        'memo'     => 'nullable|string|max:500',
    ]);
    $learningLog = Learninglog::findOrFail($id);
    
    $learningLog->title = $validated['title']; 
    $learningLog->category = $validated['category'];
    $learningLog->minutes = $validated['minutes'];
    $learningLog->memo = $validated['memo'];   
    $learningLog->save();

    return redirect()->route('dashboard');

    }


}
