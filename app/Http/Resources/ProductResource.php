<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $category = $this->category;
        $brand= $this->brand;

        return [

            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'photo' => $this -> photo,
            'category' => [
                'id'=>$category->id,
                'name'=>$category->name
            ],
            'brand' => [
                'id'=>$brand -> id,
                'name'=>$brand->name
            ],
            'status' => $this -> status,
            'slug' => $this-> slug


        ];
    }
}
