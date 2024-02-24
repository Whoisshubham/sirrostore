<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function countrieName(){
        return $this->hasOne(Countrie::class,'id','countrie_id');
    }
    public function usersDetails(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function stateName(){
        return $this->hasOne(State::class,'id','state_id');
    }
    public function cityName(){
        return $this->hasOne(Cities::class,'id','city_id');
    }
}
