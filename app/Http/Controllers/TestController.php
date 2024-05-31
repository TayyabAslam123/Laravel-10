<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class TestController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Your controller logic here
        return response()->json(['message' => 'Invokable controller executed']);
    }

}
