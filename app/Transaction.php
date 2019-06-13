<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function user()
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

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
