<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailcart extends Model
{
    use HasFactory;
    protected $fillable = [
        'cart_id',  'product_id','quantity','price','name','image','thanhtien','loai'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
