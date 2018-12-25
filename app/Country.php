<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $fillable = [
      'country_name', 'country_code',
    ];

    public function states(){
        return $this->hasMany(State::class);
    }
}
