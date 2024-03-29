<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $table = "polls";
    protected $fillable = ['titles_id', 'titleDescription', 'description', 'instruction', 'quarters_id', 'isClose', 'isModel'];

    public function titles() {
        return $this->belongsTo('App\Title');
    }

    public function questions()
    {
        return $this->belongsToMany('App\Question')->withTimestamps();
    }

    public function faculties()
    {
        return $this->belongsToMany('App\Faculty')->withTimestamps();
    }

    public function subjects()
    {
        return $this->belongsToMany('App\Subject')->withTimestamps();
    }

    public function quarters()
    {
        return $this->belongsTo('App\Quarter');
    }

    public  function professors()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
