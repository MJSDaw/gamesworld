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
}
