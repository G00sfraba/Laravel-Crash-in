<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        for ($i = 0; $i < 10; $i++) {
            DB::table('games')->insert(
                    ['name' => 'Game_name_' . Str::random(10),
                     'genere' => 'Game_genere_' . Str::random(10),]
            );
        }
    }

}
