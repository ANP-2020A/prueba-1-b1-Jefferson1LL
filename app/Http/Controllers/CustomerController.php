<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return Customers::all();
    }

    public function show(Customers $customers)
    {
        return $customers;
    }

    public function store(Request $request){
        $customers = Customers::create($request->all());
        return response()->json($customers, 201);
    }

    public function update(Request $request, Customers $customers){
        $customers->update($request->all());

        return response()->json($customers, 200);
    }

    public function delete(Request $request, Customers $customers){

        $customers->delete();

        return response()->json(null, 204);
    }
}
