<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'status'
    ];

    public static function boot(){
        parent::boot();
        static::saving(function($brand){
            $brand->slug=Str::slug($brand->name);
        });
    }


    public function products(){

        return $this->hasMany(Product::class);
    }
}
