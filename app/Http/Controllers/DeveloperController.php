<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function index()
    {
        return Developer::all();
    }

    public function show($id)
    {
        $developer = Developer::find($id);
        if (!$developer) {
            return response()->json(['message' => 'Developer not found'], 404);
        }
        return $developer;
    }

    public function create(Request $request)
    {
        $developer = Developer::create($request->all());
        return response()->json($developer, 201);
    }

    public function update(Request $request, $id)
    {
        $developer = Developer::find($id);
        if (!$developer) {
            return response()->json(['message' => 'Developer not found'], 404);
        }
        $developer->update($request->all());
        return $developer;
    }

    public function delete($id)
    {
        $developer = Developer::find($id);
        if (!$developer) {
            return response()->json(['message' => 'Developer not found'], 404);
        }
        $developer->delete();
        return response()->json(['message' => 'Developer deleted'], 204);
    }
}
