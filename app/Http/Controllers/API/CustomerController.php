<?php

namespace App\Http\Controllers\API;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|string|min:8',
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $customer = Customer::create($validatedData);
        return response()->json($customer, 201);
    }

    public function index()
    {
        $customers = Customer::all();
        return response()->json($customers);
    }   

    public function update(Request $request, $id)
    {
       $customers = Customer::find($id);
       
       if (!$customers) {
        return response()->json(['message' => 'Customer not found'], 404);
       }

       $customers->update($request->all());
       return response()->json($customers);
    }

    public function show($id)
    {
        $customers = Customer::find($id);

    if (!$customers) {
        return response()->json(['message' => 'Customer not found'], 404);
    }
    return response()->json($customers);
    }

    public function destroy($id)
    {
        $customers = Customer::find($id);

        if(!$customers){
            return response()->json(['message' => 'Customer not found'], 404);
        }
        $customers->delete();
        return response()->json(['message' => 'Customer deleted successfully']);
    }
}
