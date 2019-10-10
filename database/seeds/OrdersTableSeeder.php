<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i< 10; $i++){
            DB::table('orders')->insert([
                'price' => rand(10, 99),
                'user_id' => 1
            ]);
        }
    }
}
