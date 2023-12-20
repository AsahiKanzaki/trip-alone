<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model

{
    protected $fillable = [
    'genre_id',
    'image_url',
    'comment',
    'user_id',
    'destination',

    ];
    use HasFactory;
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
