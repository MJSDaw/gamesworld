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

    public function create(Request $request)
    {
        $publisher = Publisher::create($request->all());
        return response()->json($publisher, 201);
    }

    public function update(Request $request, $id)
    {
        $publisher = Publisher::find($id);
        if (!$publisher) {
            return response()->json(['message' => 'Publisher not found'], 404);
        }
        $publisher->update($request->all());
        return $publisher;
    }

    public function delete($id)
    {
        $publisher = Publisher::find($id);
        if (!$publisher) {
            return response()->json(['message' => 'Publisher not found'], 404);
        }
        $publisher->delete();
        return response()->json(['message' => 'Publisher deleted'], 204);
    }
}
