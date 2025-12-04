<?php

namespace App\Http\Controllers\API;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
     public function store(Request $request)
    {
        $address = Address::create($request->all());
        return response()->json($address, 201);
    }

    public function index()
    {
        $address = Address::all();
        return response()->json($address);
    }   

    public function update(Request $request, $id)
    {
       $address = Address::find($id);
       
       if (!$address) {
        return response()->json(['message' => 'Address not found'], 404);
       }

       $address->update($request->all());
       return response()->json($address);
    }

    public function show($id)
    {
        $address = Address::find($id);

    if (!$address) {
        return response()->json(['message' => 'Address not found'], 404);
    }
    return response()->json($address);
    }

    public function destroy($id)
    {
        $address = Address::find($id);

        if(!$address){
            return response()->json(['message' => 'Address not found'], 404);
        }
        $address->delete();
        return response()->json(['message' => 'Address deleted successfully']);
    }
}
