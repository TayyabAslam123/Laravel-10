<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Brand;


class Car extends Model
{
    use HasFactory;

    public function brand()
    {
        return $this->hasOne('App\Models\Brand');
        // return $this->hasOne(Brand::class);

    }

}
