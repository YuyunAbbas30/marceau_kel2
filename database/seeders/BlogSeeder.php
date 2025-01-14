<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->truncate();

        Blog::factory()
            ->count(3)
            ->create();

        // DB::table('blogs')->insert([
        //     'title' => 'blog 2',
        // ]);
        // DB::table('blogs')->insert([
        //     'title' => 'blog 3',
        // ]);
        
    }
}
