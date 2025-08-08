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

    public function create(Request $request)
    {
        $game = Game::create($request->all());
        return response()->json($game, 201);
    }

    public function update(Request $request, $id)
    {
        $game = Game::find($id);
        if (!$game) {
            return response()->json(['message' => 'Game not found'], 404);
        }
        $game->update($request->all());
        return $game;
    }

    public function delete($id)
    {
        $game = Game::find($id);
        if (!$game) {
            return response()->json(['message' => 'Game not found'], 404);
        }
        $game->delete();
        return response()->json(['message' => 'Game deleted'], 204);
    }
}
