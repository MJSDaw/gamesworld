<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function index()
    {
        return Platform::all();
    }

    public function show($id)
    {
        $platform = Platform::find($id);
        if (!$platform) {
            return response()->json(['message' => 'Platform not found'], 404);
        }
        return $platform;
    }

    public function create(Request $request)
    {
        $platform = Platform::create($request->all());
        return response()->json($platform, 201);
    }

    public function update(Request $request, $id)
    {
        $platform = Platform::find($id);
        if (!$platform) {
            return response()->json(['message' => 'Platform not found'], 404);
        }
        $platform->update($request->all());
        return $platform;
    }

    public function delete($id)
    {
        $platform = Platform::find($id);
        if (!$platform) {
            return response()->json(['message' => 'Platform not found'], 404);
        }
        $platform->delete();
        return response()->json(['message' => 'Platform deleted'], 204);
    }
}
