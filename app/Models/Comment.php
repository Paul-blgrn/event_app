<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // comment belongs to one user
    public function user(){
        return $this->belongsTo(User::class);
    }

    // comment is posted in one event
    public function event() {
        return $this->belongsTo(Event::class);
    }
}
