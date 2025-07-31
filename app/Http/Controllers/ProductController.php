<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    Public function getAllProducts()
    {
        $products = Product::all();
        return response($products);
    }
    Public function getOneProduct($id)
    {
        $product = Product::find($id);
        if ($product) {
            return response($product);
        } else {
            return response(['message' => 'Product not found']);
        }
    }


public function addProduct(Request $request)
{
   
    $request->validate([
        'name' => 'required|string',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // max 2MB
    ]);

   
    $product = new Product();
    $product->name = $request->name;
    $product->price = $request->price;
    $product->quantity = $request->quantity;

    
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products', 'public');
        $product->image = $imagePath;
    }

    $product->save();

    return response()->json(['message' => 'Product added successfully!', 'data' => $product]);
}

  Public function updateProduct(Request $request, $id){
    $product = Product::find($id);
    if($product){
        $product->update($request->all());

        $updated = Product::find($id);
        return response(['data' => $updated, 'message' => 'Product updated successfully']);
    }
  }
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return response(['message' => 'Product deleted successfully']);
        } else {
            return response(['message' => 'Product not found'], 404);
        }
    }
}
