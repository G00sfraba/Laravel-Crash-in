<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    public static function boot() {
        parent::boot();

        static::created(function(){
        Event::fire(Events\OrderSubmitted::class);
        });
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function games() {
        return $this->belongsToMany(Game::class); 
    }

}
