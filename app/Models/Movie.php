<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'director',
        'genre',
        'release_yeah',
        'user_id',
    ];

    public function owner() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
