<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    public function machine() {
        return $this->belongsTo(Machine::class);
    }

    public function state() {
        return $this->belongsTo(State::class);
    }

    public function location() {
        return $this->belongsTo(Location::class);
    }

    public function site() {
        return $this->belongsTo(Site::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
