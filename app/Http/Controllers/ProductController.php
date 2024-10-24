<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->get();
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // $categoryIds = [1,2];
        // Link pivot entries
        // $product->category()->attach($categoryIds);

        // // unlink given entries
        // $product->category()->detach($categoryIds);
        
        // unlink all
        // $product->category()->detach();
        
        // Replaces existing relations with only these category IDs
        // $product->category()->sync([3, 4]); 

        // Toggling categories: Toggle will attach a category if it isn't already attached and detach it if it is.
        // $product->category()->toggle([1, 3]);

        // If you do not want to detach existing IDs, you may use the syncWithoutDetaching method:
        $product->category()->syncWithoutDetaching([2,3]); 
        
        // Eager load the category
        $product->load('category'); 
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
