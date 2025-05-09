<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $hidden = ['laravel_through_key'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function country()
    {
        return $this->state->country();
    }

}
