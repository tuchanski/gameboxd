<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    use HasFactory;
    protected $fillable = [
        'body',
        'rating',
        'user_id',
        'game_id',
        'title',
        'image',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
