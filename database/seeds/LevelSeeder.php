<?php

use App\Models\Level;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level1 = [
            'id' => 1,
            'nama' => 'admin',
            'desk' => 'Administrator',
        ];
        // DB::table('level')->insert();

        $level2 = [
            'id' => 2,
            'nama' => 'client',
            'desk' => 'Client',
        ];

        // DB::table('level')->insert($level2);

        Level::create($level1);
        Level::create($level2);
    }
}
