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
        ## Basic Eager Loading - Load all products with their categories
        $products = Product::with('category','media')->get();
    
        ## Eager Loading with Specific Columns - Load only name and slug from category
        // $products = Product::with('category:name,slug')->get();
    
        ## Advanced Querying - Load products having specific category (using whereHas)
        // $products = Product::with('category')->whereHas('category', function($query) {
        //     $query->whereIn('category_id', [1]);
        // })->get();
    
        ## Advanced Querying - Load products where category_id is in [1,2,5]
        // $products = Product::whereHas('category', function($query) {
        //     $query->whereIn('category_id', [1,2,5]);
        // })->with('category')->get();
    
        ## Advanced Querying - Load products filtered by categories without eager loading
        // $products = Product::whereHas('category', function($query) {
        //     $query->whereIn('category_id', [1, 2, 3]);
        // })->get();
    
        ## Eager Loading with Count - Get products along with the number of related categories
        // $products = Product::withCount('category')->get();
    
        ## Finding a Single Product by ID
        // $product = Product::find(1);
    
        ## Attaching Categories - Attach multiple categories to a product
        // $product->category()->attach([1,2]);
    
        ## Detaching Categories - Remove all categories associated with the product
        // $product->category()->detach();
    
        ## Syncing Categories - Attach only specified categories and remove others
        // $product->category()->sync([3,4]);
    
        ## Toggling Categories - Attach if not attached, detach if already attached
        // $product->category()->toggle([1,4]);
    
        ## Sync Without Detaching - Add new categories without removing existing ones
        // $product->category()->syncWithoutDetaching([3,4]);
    
        ## Load the related category for the returned product
        return $products;
        // return $product->load('category');
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
