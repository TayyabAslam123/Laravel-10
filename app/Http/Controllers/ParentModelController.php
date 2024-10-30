<?php

namespace App\Http\Controllers;

use App\Models\ParentModel;
use Illuminate\Http\Request;


class ParentModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parents = ParentModel::with('student')->get();
        return $parents;
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
    public function show(ParentModel $parentModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ParentModel $parentModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ParentModel $parentModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ParentModel $parentModel)
    {
        //
    }
}