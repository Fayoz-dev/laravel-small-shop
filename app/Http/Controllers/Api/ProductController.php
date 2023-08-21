<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return ProductResource::collection(Product::paginate(10));
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function filter(Request $request)
    {
        $data = $request->all();
        $product = Product::query();
        if (isset($data['category_id'])){
            $product = $product->where('category_id',$data['category_id']);
        }
        if (isset($data['price'])){
            $product = $product->where('price',$data['price']);
        }
        if (isset($data['brand_id'])){
            $product = $product->where('brand_id',$data['brand_id']);
        }


        return response()->json([
            'success'=>true,
            'data'=>ProductResource::collection($product->paginate(10))
        ]);
    }

    public function search($name)
    {
         return Product::where("name","like","%". $name."%")->get();
    }
}
