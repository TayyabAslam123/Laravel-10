<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        // Get all categories with only 'name' and 'slug' columns (simple select without relationships)
        $categories = Category::all('name','slug');

        // Get all categories with their related products loaded (eager loading the products relationship)
        $categories = Category::with('products')->get();

        // Get all categories with their related products AND each product's media loaded (nested eager loading)
        $categories = Category::with('products.media')->get();

        return $categories;
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
    public function show(Category $category)
    {
        //
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Category $category)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, Category $category)
    {
        //
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Category $category)
    {
        //
    }
}
