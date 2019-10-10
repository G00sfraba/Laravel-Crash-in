<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('game_id')->unsigned()->nullable();
            $table->bigInteger('order_id')->unsigned()->nullable();
            
            $table->foreign('game_id')->references('id')->on('games')
                    ->onDelete('set null');
            
            $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_order');
    }
}
