<?php

namespace App\Http\Controllers\API;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $orders = Order::create($request->all());
        return response()->json($orders, 201);
    }

    public function index()
    {
        $orders = Order::all();
        return response()->json($orders);
    }   

    public function update(Request $request, $id)
    {
       $orders = Order::find($id);
       
       if (!$orders) {
        return response()->json(['message' => 'Order not found'], 404);
       }

       $orders->update($request->all());
       return response()->json($orders);
    }

    public function show($id)
    {
        $orders = Order::find($id);

    if (!$orders) {
        return response()->json(['message' => 'Order not found'], 404);
    }
    return response()->json($orders);
    }

    public function destroy($id)
    {
        $orders = Order::find($id);

        if(!$orders){
            return response()->json(['message' => 'Order not found'], 404);
        }
        $orders->delete();
        return response()->json(['message' => 'Order deleted successfully']);
    }
}
