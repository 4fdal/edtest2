<?php

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'id_user' => 1,
            'title' => 'Ini title',
            'body' => 'Ini body',
        ]);
    }
}
