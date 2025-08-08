<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = ['name'];

    // Relación muchos a muchos con juegos
    public function games()
    {
        return $this->belongsToMany(Game::class, 'game_platform', 'platform_id', 'game_id');
    }
}
