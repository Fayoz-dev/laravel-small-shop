<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'photo',
        'status',
        'price'
    ];

    public function category(){

        return $this -> belongsTo(Category::class);

    }

    public function brand(){

        return $this -> belongsTo(Brand::class);

    }

    public function orders(){

        return $this-> belongsToMany(Order::class);

    }

}
