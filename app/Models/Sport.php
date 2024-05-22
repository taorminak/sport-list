<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sport extends Model {

    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function matches() {
        return $this->hasMany(MatchEvent::class);
    }
}