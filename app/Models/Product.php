<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "category_id",
        "image",
        "product_name",
        "slug",
        "product_price",
        "product_sale_price",
        "title",
        "size",
        "product_overview",
        "accordion",
        "total_stock",
        "status",
        "shiping_charges"
    ];

    public function productCategorie()
    {
        return $this->hasOne(SubCategorie::class, 'id', 'category_id');
    }
    public function productOverview()
    {
        return $this->hasMany(ProductOverview::class, 'product_id', 'id');
    }
    public function productOne()
    {
        return $this->hasOne(ProductOverview::class, 'product_id', 'id');
    }
    public function OfferOne()
    {
        return $this->hasOne(Offer::class, 'product_id', 'id');
    }
}
