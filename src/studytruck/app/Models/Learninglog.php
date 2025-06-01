<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Learninglog extends Model
{

    // 一括代入可能な属性
    protected $fillable = [
        'user_id',
        'title',
        'category',
        'minutes',
        'memo',
    ];

    // リレーション：この学習ログは「1人のユーザー」に属する
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
