<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'email',
        'address',
        'city',
        'state',
        'pin',
        'product_id',
        'product_name',
        'quantity',
        'price',
        'total_amount',
        'payment_method',
        'order_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
{
    return $this->belongsToMany(Product::class)->withPivot('quantity');
}
}