<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function mustahiq()
    {
        return $this->belongsTo(Mustahiq::class);
    }
}
