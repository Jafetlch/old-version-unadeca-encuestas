<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "items";
    protected $fillable = ['name'];

    public function questions() {
        return $this->belongsToMany('App\Question')->withTimestamps();
    }
}
