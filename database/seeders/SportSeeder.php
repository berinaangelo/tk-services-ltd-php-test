<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sports = [
            ['name' => 'Chess'],
            ['name' => 'Badminton'],
            ['name' => 'Basketball'],
            ['name' => 'Volleyball'],
            ['name' => 'Football'],
            ['name' => 'Table Tennis'],
        ];

        DB::table('sports')->insert($sports);
    }
}
