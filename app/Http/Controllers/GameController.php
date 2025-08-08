<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return Game::with(['developer', 'publisher', 'genres', 'platforms'])->get();
    }

    public function show($id)
    {
        $game = Game::with(['developer', 'publisher', 'genres', 'platforms'])->find($id);
        if (!$game) {
            return response()->json(['message' => 'Game not found'], 404);
        }
        return $game;
    }
}
