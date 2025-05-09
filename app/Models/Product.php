<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $hidden = [
        'pivot'
    ];

    public function category()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function media(){
        return $this->hasMany('App\Models\Media');
    }
    
}
