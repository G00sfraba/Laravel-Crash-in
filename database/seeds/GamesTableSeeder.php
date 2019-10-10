<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        DB::table('games')->insert(
                ['name' => 'Game_name_' . Str::random(10),
                'genere' => 'Game_name_' . Str::random(10),]
        );
    }

}
