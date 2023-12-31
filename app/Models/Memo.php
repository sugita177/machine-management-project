<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;

    public function machine() {
        return $this->belongsTo(Machine::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
