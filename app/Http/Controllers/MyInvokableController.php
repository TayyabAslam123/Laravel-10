<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyInvokableController extends Controller
{
    public function __invoke(Request $request)
    {
        $name = $request->input('name');
        return "Hello, $name! <br> This is an invokable controller.";
    }
}
