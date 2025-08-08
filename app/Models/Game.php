<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'title',
        'description',
        'releaseDate',
        'developer',
        'publisher',
    ];

    public function developer()
    {
        return $this->belongsTo(Developer::class, 'developer');
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'game_genre', 'game_id', 'genre_id');
    }

    public function platforms()
    {
        return $this->belongsToMany(Platform::class, 'game_platform', 'game_id', 'platform_id');
    }
}
