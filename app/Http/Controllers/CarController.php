<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $cars = Car::all();
        // $car = Car::find(1)->with('brand')->first();
        // $car = Car::where('id', 1)->first();
        // $car = $car->brand->name;

        // $car = Car::where('id', 1)->first();
        // return $car->load('brand');
        
        ## check if brand exist
        // $car = Car::find(1);
        // $hasBrand = $car->brand()->exists();
        // return $hasBrand;

        // $cars = Car::with('brand')->get();
        // $cars = Car::with('brand')->whereHas('brand')->get();
        // $cars = Car::with('brand')->whereDoesntHave('brand')->get();
        // return $cars;

        ##
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
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
