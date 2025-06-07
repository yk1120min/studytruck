<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
        'name' => 'test',
        'email' => 'test@example.com',
        'password' => bcrypt('test'),
        'bio' => 'Laravelを勉強中の社会人エンジニアです。
                  毎日30分以上、コツコツ学習ログを記録しています。
                  将来的にはポートフォリオサイトを作るのが目標です！',
        'public_id' => 'test'
    ]);
    }
}
