<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;

    public function countriesName()
    {
        return $this->hasOne(Countrie::class, 'id', 'countries_id');
    }
    public function statesName()
    {
        return $this->hasOne(State::class, 'id', 'states_id');
    }
}
