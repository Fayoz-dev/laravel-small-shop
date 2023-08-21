<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{


    public function create(Request $request)
    {
        $data = $request->validate([
            'product_id'=> 'required'
        ]);
        Order::create([
            'user_id'=>auth()->id(),
            'product_id'=>$data['product_id']
        ]);
        return response()->json([
            'success'=>true,
            'message'=>'udar'
        ]);
    }
}
