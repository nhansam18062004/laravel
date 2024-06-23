<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    // protected $table='Categories';
    // protected $primaryKey= 'id';
    protected $fillable = [
        'name',
    ];
    public function  scopeCategories($query)
    {
        return $query->orderBy('id', 'desc')->limit(5)->get();
    }
}
