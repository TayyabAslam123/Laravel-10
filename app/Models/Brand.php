<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Car;

class Brand extends Model
{
    use HasFactory;

    public function car()
    {
        return $this->belongsTo('App\Models\Car');
    }
}
