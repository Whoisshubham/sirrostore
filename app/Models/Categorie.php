<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    public function subcategoriesList(){
        return $this->hasMany(SubCategorie::class,'id',"categorie_id");
    }
}
