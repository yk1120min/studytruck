<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Learninglog;

class LearninglogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Learninglog::create([
        'user_id' => 1,
        'title' => 'ITパスポート',
        'category' => 'IT',
        'minutes' => 60,
        'memo' => 'test'
        ]);

        Learninglog::create([
        'user_id' => 1,
        'title' => '基本情報',
        'category' => 'IT',
        'minutes' => 120,
        'memo' => 'test'
        ]);

        Learninglog::create([
        'user_id' => 1,
        'title' => '応用情報',
        'category' => 'IT',
        'minutes' => 180,
        'memo' => 'test'
        ]);
    }
}
