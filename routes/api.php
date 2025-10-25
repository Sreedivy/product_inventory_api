<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

// Default test route
Route::get('/test', function() {
    return response()->json(['message' => 'API is working!']);
});

// Get all products
Route::get('/products', function () {
    return response()->json(Product::all(), 200);
});

// Add a product
Route::post('/products', function (Request $request) {
    $product = new App\Models\Product;
    $product->name = $request->name;
    $product->price = $request->price;
    $product->quantity = $request->quantity;
    $product->save();

    return response()->json(['message' => 'Product created successfully'], 201);
});