<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('App\User');
    }

    public function user()
    {
        return $this->belongsTo('App/User');
    }
}
