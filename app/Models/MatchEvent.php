<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchEvent extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function sport() {
        return $this->belongsTo(Sport::class);
    }
}
