<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'order_code', 'name', 'address', 'phone', 'email', 'payment_method', 'shipping', 'status', 'voucher', 'note', 'total_price', 'is_guest'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function details()
{
    return $this->hasMany(detailcart::class);
}
}
