<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Learninglog extends Model
{

    //Laravelにおける モデル（Model） と マイグレーション（Migration） の紐付けは、
    //モデルのクラス名とマイグレーションで定義されたテーブル名の間にある命名規則と、モデルの $table プロパティで決まる。
     protected $table = 'learning_logs';

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
