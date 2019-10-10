<?php

use Illuminate\Database\Seeder;

class GamesOrdersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($i = 0; $i < 10; $i++) {
            DB::table('game_order')->insert(
                    ['game_id' => rand(1, 10),
                        'order_id' => rand(1, 10),
                    ]
            );
        }
    }

}
