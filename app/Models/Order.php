<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'date',
        'time',
        'status',
        'price',
        'payment',
        'user_id',
        'delovery_id'
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class, "order_product","order_id","product_id");
    }

}
