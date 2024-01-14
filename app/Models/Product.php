<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alias',
        'image',
        'title',
        'description',
        'title_meta',
        'description_meta',
        'keywords',
        'price',
        'discount',
        'category_id',
    ];

    public function order()
    {
        return $this->belongsToMany(Order::class, "order_product");
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
