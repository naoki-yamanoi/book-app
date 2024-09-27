<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'テストユーザー１',
        //     'email' => 'aaa@example.com',
        //     'password' => 'test1111',
        // ]);

        Book::factory()->create([
            'title' => 'コンビニ人間',
            'category' => '小説',
            'finished_date' => '2024/06/10',
        ]);
    }
}
