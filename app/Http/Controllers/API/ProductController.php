<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $products = Product::create($request->all());
        return response()->json($products, 201);
    }

    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }   

    public function update(Request $request, $id)
    {
       $products = Product::find($id);
       
       if (!$products) {
        return response()->json(['message' => 'Product not found'], 404);
       }

       $products->update($request->all());
       return response()->json($products);
    }

    public function show($id)
    {
        $products = Product::find($id);

    if (!$products) {
        return response()->json(['message' => 'Product not found'], 404);
    }
    return response()->json($products);
    }

    public function destroy($id)
    {
        $products = Product::find($id);

        if(!$products){
            return response()->json(['message' => 'Product not found'], 404);
        }
        $products->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }
}
