<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'product_id',
        'quentity',
        'price'

    ];

    public function products(){

        return $this-> belongsToMany(Product::class);

    }

    public function users()
    {
        return $this -> belongsToMany(User::class);
    }
}
