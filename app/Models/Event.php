<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // event can have multiple locations
    public function locations() {
        return $this->belongsToMany(Location::class);
    }

    // event can have multiple users
    public function users() {
        return $this->belongsToMany(User::class);
    }

    // event can have multiple comments
    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
