<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    // location can have multiple events
    public function events() {
        return $this->belongsToMany(Event::class);
    }

    // location can have one city
    public function city() {
        return $this->belongsTo(City::class);
    }
}
