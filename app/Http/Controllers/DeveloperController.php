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
}
