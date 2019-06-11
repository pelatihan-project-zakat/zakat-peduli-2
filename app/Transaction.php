<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function mustahiq()
    {
        return $this->belongsTo(Mustahiq::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function programs()
    {
        return $this->belongsTo(Donationprogram::class);
    }
}
