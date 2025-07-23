<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    Public function allCustomer(){
        $customers = Customer::all();
        return response($customers);
    }
    Public function getOneCustomer($id){
        $customer = Customer::find($id);
        if($customer){
            return response($customer);

        }else{
            return response(['message' => 'Customer not found']);
        }
    }
    Public function addCustomer(Request $request){
        $request = Customer::create($request->all());
       return response($request);
        }
}
