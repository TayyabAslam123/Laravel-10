<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

use App\Models\Author;
use App\Models\Book;
use App\Models\Review;

use Illuminate\Http\Request;

class RelationShipController extends Controller
{
    public function sampleHasManyThrough()  {
            
        // $country = Country::with('states')->get();
        // return $country;
      
        // $states  = State::with('cities')->get();
        // return $states;

        $country  = Country::with('cities')->get();
        return $country;
        
    }

    // public function sampleHasManyThrough()  {
            
    //     $author  = Author::with('books','reviews')->get();
    //     return $author;
        
    // }

}
