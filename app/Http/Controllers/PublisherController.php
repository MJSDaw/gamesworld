<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        return Publisher::all();
    }

    public function show($id)
    {
        $publisher = Publisher::find($id);
        if (!$publisher) {
            return response()->json(['message' => 'Publisher not found'], 404);
        }
        return $publisher;
    }
}
