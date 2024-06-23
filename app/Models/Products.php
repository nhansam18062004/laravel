<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'price',
        'category_id',
        'quantity',

    ];
    public function  scopeProducts($query)
    {
        return $query->orderBy('id', 'desc')->limit(12)->get();
    }
    public function  scopeDogs($query)
    {
        return $query->where('name', 'like', '%chó%')->orderBy('id', 'desc')->limit(8)->get();
    }
    public function  scopeCats($query)
    {
        return $query->where('name', 'like', '%mèo%')->orderBy('id', 'desc')->limit(8)->get();
    }
    public function  scopeSold($query)
    {
        return $query->where('sold', '>=', 1)->orderBy('sold', 'desc')->limit(4)->get();
    }
}
