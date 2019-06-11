<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mustahiq extends Model
{
    public function Programs()
    {
        return $this->hasMany(Donationprogram::class);
    }
}
